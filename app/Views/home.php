<?= $this->include('templates/header') ?>

<section class="hero">
    <p class="eyebrow">POINT OF SALE FOUNDATIONS</p>
    <h1>Welcome to SimplePOS</h1>
    <p>A basic CodeIgniter 4 application for managing customer and user accounts.</p>
    <div class="actions">
        <a class="button" href="<?= site_url('customers') ?>">View Customers</a>
        <a class="button secondary" href="<?= site_url('users') ?>">View Users</a>
    </div>
</section>

<?= $this->include('templates/footer') ?>
