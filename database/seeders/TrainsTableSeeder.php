<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {

            $train = new Train();
            $train->company = $faker->words(2, true);
            $train->start_station = $faker->city;
            $train->arrival_station = $faker->city;
            $train->departure_time = $faker->time;
            $train->arrival_time = $faker->time;
            $train->train_code = $faker->swiftBicNumber();
            $train->number_carriages = $faker->numberBetween(1, 4);
            $train->in_time = $faker->boolean();
            $train->deleted = $faker->boolean();
            $train->arrive_date = $faker->date();

            $train->save();
        }
    }
}
