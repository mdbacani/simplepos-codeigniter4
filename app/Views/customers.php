<?= $this->include('templates/header') ?>

<section class="page-heading">
    <p class="eyebrow">POS RECORDS</p>
    <h1>Customer Accounts</h1>
    <p>Customer information from a temporary static PHP array.</p>
</section>

<div class="table-wrapper">
    <table>
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= esc($customer['full_name']) ?></td>
                    <td><?= esc($customer['email']) ?></td>
                    <td><?= esc($customer['phone']) ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?= $this->include('templates/footer') ?>
