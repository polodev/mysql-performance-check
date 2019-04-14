<?php

use App\Post;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateAPost()
    {
    	$faker = Factory::create();
    	return [

    			'user_id'     => rand(1, 2),
    			'title'       => $faker->sentence,
    			'description' => $faker->paragraph(5, true),
    			'text'        => $faker->paragraph(50, true),

    			'title2'       => $faker->sentence,
    			'description2' => $faker->paragraph(5, true),
    			'text2'        => $faker->paragraph(50, true),

    			'title3'       => $faker->sentence,
    			'description3' => $faker->paragraph(5, true),
    			'text3'        => $faker->paragraph(50, true),

    		];
    }
    public function run()
    {
    	$posts = [];
    	foreach (range(0, 100) as $value) {
    		$posts[] = $this->generateAPost();
    	}
    	 DB::table('posts')->insert($posts);
    }
}
