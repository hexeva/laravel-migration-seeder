<?php

use Illuminate\Database\Seeder;
use App\Trip;
use Faker\Generator as Faker;
class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        

        for($i=0;$i < 10; $i++){

            $new_trip = new Trip();
            $new_trip->destination = $faker->country();
            $new_trip->trip_nights = $faker->randomDigitNotNull();
            $new_trip->description = $faker->paragraph();
            $new_trip->price =  $faker->randomFloat(2,0,9999);
            $new_trip->discount = $faker->boolean();
            $new_trip->discount_amount = $faker->randomDigit(0,20);
            $new_trip->votes = $faker->randomDigitNotNull();
            $new_trip->save();
            



        }
    
    }
}
