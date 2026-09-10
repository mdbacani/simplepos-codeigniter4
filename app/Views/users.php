<?= $this->include('templates/header') ?>

<section class="page-heading">
    <p class="eyebrow">STAFF RECORDS</p>
    <h1>User Accounts</h1>
    <p>User and staff information from a temporary static PHP array.</p>
</section>

<div class="table-wrapper">
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Full Name</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= esc($user['username']) ?></td>
                    <td><?= esc($user['full_name']) ?></td>
                    <td><span class="role"><?= esc($user['role']) ?></span></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?= $this->include('templates/footer') ?>
