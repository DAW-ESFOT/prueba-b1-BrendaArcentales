<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        Genre::truncate();
        $faker = \Faker\Factory::create();
        // Crear artículos ficticios en la tabla
        for($i = 0; $i < 10; $i++) {
            Genre::create([
                'name'=> $faker->word,
            ]);
        }
    }
}
