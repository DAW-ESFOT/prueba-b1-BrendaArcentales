<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        Movie::truncate();
        $faker = \Faker\Factory::create();
        $genres = Genre::all();
        // Crear artículos ficticios en la tabla
        foreach ($genres as $genre) {
            $num_genres = 2;
            for($i = 0; $i < $num_genres; $i++) {
                Movie::create([
                    'name'=> $faker->sentence,
                    'code'=> $faker->iban(),
                    'year'=> $faker->year,
                    'available'=>true,
                    'genre_id'=>$genre->id,
                ]);
            }
        }

    }
}
