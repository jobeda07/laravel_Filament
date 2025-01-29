<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Student;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Liza',
            'email' => 'liza@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        Student::factory(50000)->create();
        $this->call(StandardSeeder::class);
    }
}
