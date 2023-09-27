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
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train;

            $train->azienda = $faker->sentence();
            $train->stazione_di_partenza = $faker->sentence();
            $train->stazione_di_arrivo = $faker->sentence();
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->randomNumber(6);
            $train->numero_carrozze = $faker->randomDigit();
            $train->in_orario = $faker->numberBetween(0, 1);
            $train->cancellato = $faker->numberBetween(0, 1);

            $train->save();
        }
    }
}
