<?php

use App\Model\User;
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
        factory(User::class)->create([
            'name' => 'Gilson Alves',
            'email' => 'gilsonalvesdesouza@hotmail.com'
        ]);
    }
}
