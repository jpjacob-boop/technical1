<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        // This is temporary data. We will use a database in a later activity.
        $customers = [
            ['name' => 'Ava Santos', 'email' => 'ava@example.com', 'phone' => '0917-555-0101'],
            ['name' => 'Miguel Reyes', 'email' => 'miguel@example.com', 'phone' => '0917-555-0102'],
            ['name' => 'Bea Cruz', 'email' => 'bea@example.com', 'phone' => '0917-555-0103'],
            ['name' => 'Daniel Flores', 'email' => 'daniel@example.com', 'phone' => '0917-555-0104'],
            ['name' => 'Lia Garcia', 'email' => 'lia@example.com', 'phone' => '0917-555-0105'],
        ];

        return view('customers', ['customers' => $customers]);
    }
}
