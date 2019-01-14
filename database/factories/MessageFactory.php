<?php

use Faker\Generator as Faker;

$factory->define(App\Message::class, function (Faker $faker) {
    return [
        //
        'user_id' => App\User::inRandomOrder()->first()->id,
        'message' => $faker->text,
    ];
});
