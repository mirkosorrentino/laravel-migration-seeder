<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
            $train = new Train();
            $train->train_code = $faker->bothify('??-#########');
            $train->company = $faker->word();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_date = $faker->randomElement(['2023-05-25', '2023-05-26', '2023-05-27', '2023-05-28']);
            $train->departure_time = $faker->time('H:i');
            $train->arrival_time = $faker->time('H:i');
            $train->carriages_number = $faker->numberBetween(1, 30);
            $train->on_time = $faker->randomElement([true, false]);
            $train->cancelled = $faker->randomElement([true, false]);
            $train->save();
        }
    }
}
