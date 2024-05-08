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
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Rizky Admin',
            'email' => 'rizkysaid@fic16.com',
            'password' => Hash::make('12345678')
        ]);

        // data dummy for company
        \App\Models\Company::create([
            'name' => 'FIC 16',
            'email' => 'fic16@fic16.com',
            'address' => 'Jl. Asia Afrika No. 11 Kota Cirebon',
            'latitude' => '-6.7969',
            'longitude' => '108.5397',
            'radius_km' => '0.5',
            'time_in' => '08:00',
            'time_out' => '17:00',
        ]);

        $this->call([
            AttendanceSeeder::class,
            PermissionSeeder::class,
        ]);
    }
}
