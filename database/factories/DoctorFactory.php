<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Doctor;
use Faker\Generator as Faker;


$factory->define(Doctor::class, function (Faker $faker) {
    static $password;

    $password = bcrypt('123');

    return [
        'username' => $faker->word,
        'password' => $password,
    ];
});
