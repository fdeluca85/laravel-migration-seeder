<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $trip = new Trip();
            $trip->city = $faker->city();
            $trip->country = $faker->country();
            $trip->description = $faker->text(300);
            $trip->departure = $faker->dateTime();
            $trip->return = $faker->dateTime();
            $trip->price = $faker->randomDigit(2, 3);
            $trip->save();
        }
    }
}
