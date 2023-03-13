<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// model
use App\Models\Train;

// faker
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker){
        for ($i = 0; $i < 10 ; $i++) { 
            
            $train = new Train();
            $train->azienda = 'trenitalia';
            $train->stazione_partenza = 'milano centrale';
            $train->stazione_arrivo = 'roma Termini';   
            $train->orario_partenza = $faker->time();   
            $train->orario_arrivo = $faker->time();   
            $train->codice_treno = $faker->randomNumber(5, true);   
            $train->n_carrozze = $faker->randomNumber(2, true);  
            $train->in_orario = true;   
            $train->cancellato = false;   
            $train->save();
        }

    }
}
