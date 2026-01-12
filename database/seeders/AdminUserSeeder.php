<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => null,
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => 'admin@salon.com',
            'mobile' => null,
            'login_type' => null,
            'player_id' => null,
            'web_player_id' => null,
            'gender' => null,
            'date_of_birth' => null,
            'is_manager' => 0,
            'show_in_calender' => 0,
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'avatar' => null,
            'is_banned' => 0,
            'is_subscribe' => 0,
            'status' => 1,
            'last_notification_seen' => null,
            'user_setting' => null,
            'remember_token' => null,
        ]);
    }
}
