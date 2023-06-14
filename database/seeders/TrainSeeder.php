<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;
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
        for($i = 0; $i < 100; $i++){
            $train = new Train();
            $train->azienda = $faker->text(10);
            $train->stazione_di_partenza = $faker->randomElement(['pavia', 'voghera', 'genova']);
            $train->stazione_di_arrivo = $faker->randomElement(['roma', 'milano', 'napoli']);
            $train->orario_partenza = $faker->dateTimeBetween('-1 day', '+1 day');
            $train->orario_arrivo = $faker->dateTimeBetween('+1 day', '+2 day');
            $train->codice_treno = 'AB'.$faker->randomDigit();
            $train->numero_vagoni = $faker->randomDigit();
            $train->in_orario = $faker->boolean(70);
            $train->annullato = $faker->boolean(20);
            $train->save();
        }
    }
}
