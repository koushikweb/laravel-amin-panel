<?php
 use App\User;
 use Illuminate\Database\Seeder;


 class UsersTableSeeder extends  Seeder {
   public function  run() {
       $users = [[
          'id' => 1,
          'username' => 'admin',
          'password' => '$2y$10$imU.Hdz7VauIT3LIMCMbsOXvaaTQg6luVqkhfkBcsUd.SJW2XSRKO',
          'email' => 'koushikwebprogrammer@gmail.com',
          'firstname' => 'koushik',
          'lastname' => 'chatterjee',
          'created_at' => '2020-05-18 11:12:13',
          'updated_at' => '2020-05-18 11:12:13'
       ]];
        User::insert($users);
   }
 }