<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name'          => 'ADMIN Frances',
            'email'         => 'cestest@mail.com',
            'password'      => bcrypt('cestest'),
            'created_at'    => date("Y-m-d H:i:s"),
            'role'          => 'admin'
        ]);
    }
}
