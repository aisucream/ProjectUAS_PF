<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userdata = [
            [
            'name'      => 'Eka',
            'email'     => 'eka@gmail.com',
            'password'  => bcrypt('admin'),
            'role_id'      => 1
            ],
            [
            'name'      => 'Obaja',
            'email'     => 'arcadiusobaja@gmail.com',
            'password'  => bcrypt('user'),
            'role_id'      => 2
            ],
                        [
            'name'      => 'Pak Ahmad',
            'email'     => 'ahmad@gmail.com',
            'password'  => bcrypt('dosen'),
            'role_id'      => 3
            ]
        ];

        foreach($userdata as $key => $val){
            User::create($val);
        }
    }
}
