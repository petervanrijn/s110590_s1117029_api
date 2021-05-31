<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Peter',
            'email' => "Petervanrijn@hotmail.nl",
            'password' => bcrypt('Gaaf0345'),
        ]);
    }
}
