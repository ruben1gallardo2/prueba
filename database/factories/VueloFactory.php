<?php


use App\Vuelo;



$factory->define(App\Vuelo::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'sits' => $faker->numberBetween(1,255)

    ];
});
