<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => 'Lv1',
        'body' => 'Laravel課題',
    ];
});
