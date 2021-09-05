<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Admin =  User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('123456789')
        ]);
       $Employee1 =  User::create([
            'name'=>'beshoy',
            'email'=>'beshoysedkey@gmail.com',
            'password'=>Hash::make('123456789')
        ]);
        $Admin->attachRole('Admin');
        $Employee1->attachRole('Employee');


    }
}
