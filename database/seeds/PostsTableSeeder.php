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
    			'text'        => $faker->paragraph(30, true),

    			'title2'       => $faker->sentence,
    			'description2' => $faker->paragraph(5, true),
    			'text2'        => $faker->paragraph(30, true),

    			'title3'       => $faker->sentence,
    			'description3' => $faker->paragraph(5, true),
    			'text3'        => $faker->paragraph(30, true),

    		];
    }
    public function generateAllPost($number=2000)
    {
    	//7
    	$posts = [];
    	// foreach (range(0, $number) as $value) {
    	// 	$posts[] = $this->generateAPost();
    	// }
    	for ($i = 0; $i < $number; $i++) {
    		$posts[] = $this->generateAPost();
    	}
    	 DB::table('posts')->insert($posts);

    }
    public function generateAllPost2($number=2000)
    {
    	//19
    	for ($i = 0; $i < $number; $i++) {
	    	Post::create($this->generateAPost());
    	}
    }
    public function run()
    {
        $time_start = microtime(true);
    	$this->generateAllPost(3000);
        $time_end = microtime(true);
        $execution_time = ($time_end - $time_start);
        echo '<b>Total Execution Time:</b> '.$execution_time.' Seconds';
        // $execution_time = ($time_end - $time_start)/60;
        // echo '<b>Total Execution Time:</b> '.$execution_time.' Mins';


    }

}
