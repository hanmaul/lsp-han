<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'farhanmaulana',
        	'email' => 'farhanmaulana@gmail.com',
        	'password' => bcrypt('890890'),
        	'level' => 'Admin Utama'
        	]);
    }
}
