<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // تعطيل قيود المفاتيح الأجنبية
        User::truncate(); // تنفيذ أمر TRUNCATE
        DB::statement('SET FOREIGN_KEY_CHECKS = 1'); // إعادة تفعيل قيود المفاتيح الأجنبية

        User::create([
            'name' => 'ghadeer',
            'email' => 'gh@gmail.com',
            'password' => Hash::make('123456789'),
        ]);
        User::create([
            'name' => 'admin',
            'email' => 'ad@gmail.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}
