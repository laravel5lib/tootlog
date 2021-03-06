<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Model\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->unique()->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Model\Server::class, function (Faker\Generator $faker) {
    return [
        'app_id' => $faker->randomNumber(),
        'domain' => 'https://' . $faker->unique()->domainName,
        'redirect_uri' => $faker->unique()->url,
        'client_id' => str_random(20),
        'client_secret' => str_random(20),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Model\Account::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->randomNumber(),
        'server_id' => $faker->randomNumber(),
        'account_id' => $faker->randomNumber(),
        'since_id' => $faker->randomNumber(),
        'token' => str_random(20),
        'username' => $faker->userName,
        'acct' => $faker->userName,
        'display_name' => $faker->name,
        'locked' => false,
        'account_created_at' => $faker->dateTime,
        'statuses_count' => $faker->randomNumber(),
        'following_count' => $faker->randomNumber(),
        'followers_count' => $faker->randomNumber(),
        'note' => $faker->text(),
        'url' => 'https://' . $faker->unique()->domainName,
        'avatar' => $faker->imageUrl(),
        'avatar_static' => $faker->imageUrl(),
        'header' => $faker->imageUrl(),
        'header_static' => $faker->imageUrl(),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Model\Status::class, function (Faker\Generator $faker) {
    return [
        'account_id' => $faker->randomNumber(),
        'status_id' => $faker->randomNumber(),
        'content' => $faker->text(),
        'spoiler_text' => '',
        'url' => $faker->unique()->url,
        'uri' => $faker->unique()->uuid,
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Model\Tag::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
    ];
});
