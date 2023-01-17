<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::firstOrCreate([
            'name'=> "Côte d'Ivoire",
            'slug'=> "CI",
            'ios3'=> "RCI",
        ]);

        Country::firstOrCreate([
            'name'=> "Arabie Saoudite",
            'slug'=> "SA",
            'ios3'=> "SAU",
        ]);

        Country::firstOrCreate([
            'name'=> "United Arab Emirates",
            'slug'=> "AE",
            'ios3'=> "ARE",
        ]);

        Country::firstOrCreate([
            'name'=> "Mali",
            'slug'=> "ML",
            'ios3'=> "RML",
        ]);
    }
}
