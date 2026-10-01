<?php 

require __DIR__ . '/../vendor/autoload.php';

$faker = Faker\Factory::create();

$faker->addProvider(new Faker\Provider\pt_BR\Person($faker));

echo $faker->name();
echo $faker->address();

?>