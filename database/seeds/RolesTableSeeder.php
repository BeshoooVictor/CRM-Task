<?php

use App\Role;
use App\Role as AppRole;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Admin =Role::create([
            'name'=>'Admin',
            'display_name'=>'Adminn',
            'description'=>'Can Add Customers and Employees'


        ]);
        $Employee = Role::create([
            'name' => 'Employee',
            'display_name'=>'Employeee',
            'description'=>'Can Add Customers'

        ]);


    }
}
