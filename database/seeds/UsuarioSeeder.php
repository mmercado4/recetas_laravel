<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Miguel',
            'email' => 'correo@correo.com',
            'password' => Hash::make('12345678'),
            'url' => 'http://url.com',
        ]);
        DB::table('users')->insert([
            'name' => 'Marta',
            'email' => 'correo2@correo.com',
            'password' => Hash::make('12345678'),
            'url' => 'http://url.com',
        ]);
        DB::table('users')->insert([
            'name' => 'Mona',
            'email' => 'correo3@correo.com',
            'password' => Hash::make('12345678'),
            'url' => 'http://url.com',
        ]);
    }
}
