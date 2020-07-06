<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //building default user
        DB::table('users')->insert([
            'name' => 'Chris',
            'email' => 'chrisblack90@gmail.com',
            'password' => bcrypt('ThisismylongPa55word!'),
        ]);
    }
}
