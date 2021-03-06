<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([

        [
            'role' => 'SYA',  
            'name' => 'Jaikangam Malangmei',
            'designation' => 'System Administrator',
            'mobilenumber'=> '9402765302',
            'email'=> 'jaikangam12@gmail.com',
            'password' => bcrypt('password'),
            'forgotpassword'=>0,
            'isactive'=>1,
           

         ],
         [
            'role' => 'ADM',  
            'name' => 'Philip Malangmei',
            'designation' => 'Administration  ',
            'mobilenumber'=> '9402482757',
            'email'=> 'philip@gmail.com',
            'password' => bcrypt('password'),
            'forgotpassword'=>0,
            'isactive'=>1,
           

         ],
         [
            'role' => 'EMP',  
            'name' => 'Namthuibi Newmai',
            'designation' => 'Teacher',
            'mobilenumber'=> '7005780958',
            'email'=> 'namthuibi@gmail.com',
            'password' => bcrypt('password'),
            'forgotpassword'=>0,
            'isactive'=>1,
           

         ],
         [
            'role' => 'STD',  
            'name' => 'Madan Gangemi',
            'designation' => 'Student ',
            'mobilenumber'=> '7005784956',
            'email'=> 'madangangmei98@gmail.com',
            'password' => bcrypt('password'),
            'forgotpassword'=>0,
            'isactive'=>1,
           

         ],
         [
            'role' => 'PRT',  
            'name' => 'Athui Malangmei',
            'designation' => 'Staff Nurse ',
            'mobilenumber'=> '9402482757',
            'email'=> 'athui@gmail.com',
            'password' => bcrypt('password'),
            'forgotpassword'=>0,
            'isactive'=>1,
           

         ]


         ]);

    
    }
}
