<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        // This is temporary data. We will use a database in a later activity.
        $users = [
            ['username' => 'admin', 'name' => 'Jamie Lim', 'role' => 'Administrator'],
            ['username' => 'cashier1', 'name' => 'Noah Tan', 'role' => 'Cashier'],
            ['username' => 'cashier2', 'name' => 'Sofia Ramos', 'role' => 'Cashier'],
            ['username' => 'inventory1', 'name' => 'Ethan Lee', 'role' => 'Inventory Staff'],
            ['username' => 'manager1', 'name' => 'Mia Villanueva', 'role' => 'Manager'],
        ];

        return view('users', ['users' => $users]);
    }
}
