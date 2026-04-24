<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Membuat akun admin
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com', // Email yang diinginkan
            'password' => Hash::make('super123'), // Password yang diinginkan
            'role' => 'Super Administrator', // Role yang diinginkan
        ]);
    }
}
