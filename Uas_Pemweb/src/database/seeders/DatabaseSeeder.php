<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat akun admin dari factory
        $user = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'), // jika perlu password default
        ]);

        // Assign role admin
        $user->assignRole('super_admin');

        // Jalankan seeder lainnya
        $this->call([
            RoleSeeder::class,     // Penting: jalankan dulu agar role tersedia
            UserSeeder::class,
            ProductSeeder::class,
        ]);
    }

}
