<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 25; $i++) { 
            $train = new Train();
            $train->azienda = $faker->firstName() . ' ' . $faker->lastName() . ' Company';
            $train->stazione_di_partenza = 'Stazione ' . $faker->city() . ' Centro';
            $train->stazione_di_arrivo = 'Stazione ' . $faker->city() . ' Centro';
            $train->orario_di_partenza = $faker->date();
            $train->orario_di_arrivo = $faker->date();
            $train->codice_treno = $faker->bothify('??-#####');
            $train->numero_carrozze = $faker->randomDigitNotNull();
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->save();
        }
    }
}
