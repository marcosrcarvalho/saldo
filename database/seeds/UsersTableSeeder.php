<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Marcos Carvalho',
            'email'     => 'marcos.carvalho@globo.com',
            'password'  => bcrypt('mrcvip'),
        ]);
    }
}
