<?php
use Faker\Generator as Faker;
use App\Models\Post;
$factory->define(Post::class, function (Faker $faker) {
    return [
       'title' => $faker->sentence,
       'slug' => \Str::slug($faker->sentence),
       'user_id' => 1
    ];
});