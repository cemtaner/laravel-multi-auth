<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->truncate(); 
        $users = [
            [
                'name'=>'Kullanıcı Adı Soyadı',
                'email'=>'kullanici@cemtaner.com',
                'type'=>0,
                'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Admin Adı Soyadı',
               'email'=>'admin@cemtaner.com',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Yönetici Adı Soyadı',
               'email'=>'yonetici@cemtaner.com',
               'type'=> 2,
               'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Editör Adı Soyadı',
                'email'=>'editor@cemtaner.com',
                'type'=>3,
                'password'=> bcrypt('123456'),
             ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
