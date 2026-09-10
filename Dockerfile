FROM php:8.2-apache

RUN apt-get update \
    && apt-get install -y --no-install-recommends libicu-dev libonig-dev libzip-dev unzip \
    && docker-php-ext-install intl mbstring zip \
    && a2enmod rewrite \
    && sed -ri 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader \
    && chown -R www-data:www-data writable \
    && sed -ri 's!/var/www/html!/var/www/html/public!g' \
       /etc/apache2/sites-available/*.conf \
       /etc/apache2/apache2.conf \
       /etc/apache2/conf-available/*.conf

EXPOSE 80
