<?php

use Faker\Generator as Faker;

$factory->define(App\UserMessage::class, function (Faker $faker) {
    return [
        //
        'user_id' => App\User::inRandomOrder()->first()->id,
        'message' => $faker->text,
    ];
});
