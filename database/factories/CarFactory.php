<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomelement($array=array('Honda','Toyota','ford')),
        'Model' => $faker->address,
        'Year'=> $faker->year,
    ];
});
