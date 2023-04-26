<?php

namespace Database\Seeders;

use App\Helpers\DateHelper;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AddRandomUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['name' => 'Admin', 'email' => 'admin@admin.com'],
            [
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'birthday' => DateHelper::randomDateBetween()
            ]
        );

        User::factory()->count(30)->create();
    }
}
