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
        	'nama_lengkap'=>'Muhammad Luthfi sugara',
        	'no_hp' => '0822',
        	'email' => 'fandiadhitya1@gmail.com',
        	'alamat'=>'tebing',
        	'username' => 'admin',
        	'password' => bcrypt('admin'),
        	'remember_token'=> str_random(10),
        	'active' => 1,
            'type' => 'admin'
        ]);
    }
}
