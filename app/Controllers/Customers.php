<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            ['full_name' => 'Andrea Santos', 'email' => 'andrea@example.com', 'phone' => '0917-123-4567'],
            ['full_name' => 'Carlo Reyes', 'email' => 'carlo@example.com', 'phone' => '0918-234-5678'],
            ['full_name' => 'Jasmine Cruz', 'email' => 'jasmine@example.com', 'phone' => '0919-345-6789'],
            ['full_name' => 'Miguel Garcia', 'email' => 'miguel@example.com', 'phone' => '0920-456-7890'],
            ['full_name' => 'Sofia Mendoza', 'email' => 'sofia@example.com', 'phone' => '0921-567-8901'],
        ];

        return view('customers', [
            'title' => 'Customer Accounts',
            'customers' => $customers,
        ]);
    }
}
