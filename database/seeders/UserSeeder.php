<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'role_id' => 1,
            'name' => 'Administrator',
            'email' => 'admin@digima.com',
            'password' => bcrypt('@dGmW3b2023'),
        ]);

        User::factory(2)->create();
    }
}
