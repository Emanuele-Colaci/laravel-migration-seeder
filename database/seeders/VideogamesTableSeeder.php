<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\videogame;

class VideogamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $videogame = new videogame();

            $videogame->nome = $faker->word();
            $videogame->prezzo = $faker->numberBetween(0, 100);
            $videogame->maggiore_18_anni = $faker->boolean();
            
            $videogame->save();
        }
    }
}
