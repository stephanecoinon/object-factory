<?php

use Faker\Generator as Faker;

$factory->define(Tests\Stubs\Popo::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
