<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@aswa.ac.id',
            'password' => bcrypt('admin123'),
            'no_telepon' => '081234567890',
            'role' => 'admin',
        ]);
    }
}
