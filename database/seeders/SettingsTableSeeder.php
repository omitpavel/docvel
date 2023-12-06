<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['key' => 'site_name', 'value' => 'DocVel'],
            ['key' => 'logo', 'value' => 'logo.svg'],
            ['key' => 'address', 'value' => 'Demo Address'],
            ['key' => 'doctor_name', 'value' => 'Demo Doctor'],
            ['key' => 'doctor_qualification', 'value' => 'MBBS'],
            ['key' => 'chamber_Time', 'value' => '10 AM - 9 PM'],
            ['key' => 'login_cover_image', 'value' => 'cover.svg'],
            ['key' => 'favicon', 'value' => 'favicon.ico'],
            ['key' => 'style', 'value' => 'dark'],
        ];
        DB::table('settings')->insert($data);
    }
}
