<?php

use App\User;
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
    	User::truncate();
    	$users = [
    		[
    			'name' => 'shibu',
    			'email' => 'shibu@gmail.com',
    		],
    		[
    			'name' => 'polo',
    			'email' => 'polo@gmail.com',
    		],
    	];

    	foreach ($users as $user) {
	    	User::create([
	    		'name' => $user['name'],
	    		'email' => $user['email'],
	    		'password' => bcrypt('secret'),

	    	]);
    	}

    }
}
