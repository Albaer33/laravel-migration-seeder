<?php

use Illuminate\Database\Seeder;
use App\Trip;
use Faker\Generator as Faker;

class TripTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // popolare in database con dati fake 
        for($i = 0; $i < 20; $i++) {
            $new_trip = new Trip();
            $new_trip->destination = $faker->state();
            $new_trip->trip_departure_date = $faker->dateTime();
            $new_trip->trip_return_date = $faker->dateTime();
            $new_trip->price = $faker->randomFloat(2, 50, 8000);
            $new_journey->save();
        }
    }
}
