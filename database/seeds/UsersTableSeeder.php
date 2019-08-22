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
        App\User::create([
            'name' => 'Ahmed',
            'email' => 'ahmed@hypermedia.com',
            'password' => bcrypt('password')
        ]);

        App\User::create([
            'name' => 'Mohamed',
            'email' => 'mohamed@hypermedia.com',
            'password' => bcrypt('password')
        ]);

        App\User::create([
            'name' => 'Mostafa',
            'email' => 'mostafa@hypermedia.com',
            'password' => bcrypt('password')
        ]);

        App\User::create([
            'name' => 'Amr',
            'email' => 'amr@hypermedia.com',
            'password' => bcrypt('password')
        ]);

        App\User::create([
            'name' => 'Adel',
            'email' => 'adel@hypermedia.com',
            'password' => bcrypt('password')
        ]);
    }
}
