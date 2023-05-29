<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'firstname' => 'Vio',
                'lastname' => 'Odette',
                'email' => 'vio@gmail.com',
                'age' => 80,
                'position_id' => 2
            ],
            [
                'firstname' => 'Leonardo',
                'lastname' => 'Queque',
                'email'=> 'leo@gmail.com',
                'age' => 70,
                'position_id' => 3
            ],
            [
                'firstname' => 'Arlord',
                'lastname' => 'George',
                'email'=> 'jors@gmail.com',
                'age' => 60,
                'position_id' => 1
            ],
        ]);
    }
}
