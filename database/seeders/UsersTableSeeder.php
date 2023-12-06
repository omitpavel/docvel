<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['id' => 1, 'name' => 'Admin', 'email' => 'admin@admin.com', 'password' => bcrypt('123456'), 'email_verified_at' => date('Y-m-d h:i:s')]
        ];
        DB::table('users')->insert($data);
    }
}
