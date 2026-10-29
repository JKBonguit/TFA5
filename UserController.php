<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'name' => 'John Kenneth Bonguit', 'email' => 'john.kenneth@example.com', 'role' => 'Administrator', 'status' => 'Active'],
            ['id' => 2, 'name' => 'Justin James Balatucan', 'email' => 'justin.james@example.com', 'role' => 'Cashier', 'status' => 'Active'],
            ['id' => 3, 'name' => 'Lance Cordova', 'email' => 'lance.cordova@example.com', 'role' => 'Manager', 'status' => 'Active'],
            ['id' => 4, 'name' => 'Mark Michael', 'email' => 'mark.michael@example.com', 'role' => 'Cashier', 'status' => 'Inactive'],
            ['id' => 5, 'name' => 'Sofia Navarro', 'email' => 'sofia.navarro@example.com', 'role' => 'Inventory Clerk', 'status' => 'Active'],
        ];

        return view('accounts.users', compact('users'));
    }
}
