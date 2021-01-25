<?php

require_once __DIR__ . '/../vendor/autoload.php';

$faker = Faker\Factory::create('fr_FR');
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

try {
    $db = new PDO("{$_ENV['DB_CONNECTION']}:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
} catch (PDOException $e) {
    die($e->getMessage());
}

for ($i = 0; $i < 10; $i++) {

    $updated_at = $faker->dateTime( $max = 'now')->format('Y-m-d H:i:s');
    $created_at = $faker->dateTime( $max = $updated_at)->format('Y-m-d H:i:s');
    $first_name = $faker->firstName;
    $last_name = $faker->lastName;
    $email = $faker->email;
    $password = hash("sha256", $faker->password);

    $statement = $db->prepare("INSERT INTO users (created_at, updated_at, first_name, last_name, email, password) VALUES (:created_at, :updated_at, :first_name, :last_name, :email, :password)");
    $statement->execute([
        'updated_at' => $updated_at,
        'created_at' => $created_at,
        'first_name' => $first_name,
        'last_name' => $last_name,
        'email' => $email,
        'password' => $password,
    ]);
}
