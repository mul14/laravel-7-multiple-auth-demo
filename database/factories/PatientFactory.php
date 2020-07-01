<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Patient;
use Faker\Generator as Faker;

$factory->define(Patient::class, function (Faker $faker) {
    static $password;

    $password = bcrypt('123');

    return [
        'username' => $faker->word,
        'password' => $password,
    ];
});
