# SimplePOS CodeIgniter 4 Activity

SimplePOS is a four-page CodeIgniter 4 project that demonstrates the route-controller-view flow. Customer and user records are stored in static PHP arrays, so no database is required for this version.

## Required pages

- `/` - landing page
- `/about` - project information
- `/customers` - five customer records
- `/users` - five user/staff records

## Requirements

- PHP 8.2 or newer
- Composer
- PHP extensions: `intl` and `mbstring`

## Setup and run

1. Open a terminal inside the project folder.
2. Install the required packages:

   ```bash
   composer install
   ```

3. Start the development server:

   ```bash
   php spark serve
   ```

4. Open `http://localhost:8080` in a browser.

## Project structure

- Routes: `app/Config/Routes.php`
- Controllers: `app/Controllers`
- Views: `app/Views`
- Stylesheet: `public/css/style.css`

## Data source

The `Customers` and `Users` controllers each contain a static PHP array with five sample records. Each controller passes its array to a view, where a `foreach` loop displays the records in a table.
