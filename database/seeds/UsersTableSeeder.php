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
            'name' => 'gabriel',
            'username' => 'gabrieeelsp',
            'email' => 'contacto@plastitodo.com.ar',
            'password' => bcrypt('roscen'),
        ]);

        factory(User::class, 10)->create();
    }
}
