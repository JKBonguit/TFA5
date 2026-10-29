<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'name' => 'Alyssa Reyes', 'email' => 'alyssa.reyes@example.com', 'phone' => '0917 555 0101', 'status' => 'Active'],
            ['id' => 2, 'name' => 'Benjamin Cruz', 'email' => 'benjamin.cruz@example.com', 'phone' => '0917 555 0102', 'status' => 'Active'],
            ['id' => 3, 'name' => 'Carla Santos', 'email' => 'carla.santos@example.com', 'phone' => '0917 555 0103', 'status' => 'Inactive'],
            ['id' => 4, 'name' => 'Daniel Garcia', 'email' => 'daniel.garcia@example.com', 'phone' => '0917 555 0104', 'status' => 'Active'],
            ['id' => 5, 'name' => 'Erika Mendoza', 'email' => 'erika.mendoza@example.com', 'phone' => '0917 555 0105', 'status' => 'Active'],
        ];

        return view('accounts.customers', compact('customers'));
    }
}
