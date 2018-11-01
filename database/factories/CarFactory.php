<?php

use Faker\Generator as Faker;

$factory->define(App\cars::class, function (Faker $faker) {
    $random=mt_rand(0,2);
    $CarsArray = array("Ford", "Honda", "Toyota");
    return [
        'make' => $CarsArray[$random],
        'model' => $faker->company,
        'year' => $faker->year,
    ];
});
