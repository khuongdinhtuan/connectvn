<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role'      => 1,
            'name'      => 'tuankd',
            'email'     => 'khuongdinhtuan.hust@gmail.com',
            'password'  => Hash::make('admin123'),
        ]);
    }
}
