<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['username' => 'admin01', 'full_name' => 'Angela Dela Cruz', 'role' => 'Administrator'],
            ['username' => 'cashier01', 'full_name' => 'Ben Torres', 'role' => 'Cashier'],
            ['username' => 'cashier02', 'full_name' => 'Camille Flores', 'role' => 'Cashier'],
            ['username' => 'manager01', 'full_name' => 'Daniel Ramos', 'role' => 'Manager'],
            ['username' => 'staff01', 'full_name' => 'Erika Lim', 'role' => 'Inventory Staff'],
        ];

        return view('users', [
            'title' => 'User Accounts',
            'users' => $users,
        ]);
    }
}
