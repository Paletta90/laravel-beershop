<?php

use Illuminate\Database\Seeder;
use App\Beer;
use Faker\Generator as Faker;

class BeersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for ($i=0; $i < 10; $i++) { 
            $beer = new Beer();

            $beer -> nome = $faker->name();
            $beer -> colore = $faker->colorName();
            $beer -> tasso_alcolico = $faker->randomFloat(1 , 0 ,20);
            $beer -> prezzo = $faker->randomFloat(2,5,100);
            $beer -> descrizione = $faker->sentence(3);
            $beer -> codice_prodotto = $faker->randomNumber(7);
            $beer -> disponibile = $faker->boolean();

            $beer -> save();

        }

    }
}
