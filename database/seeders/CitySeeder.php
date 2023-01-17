<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::firstOrCreate([
            'country_id'=> Country::where('slug','CI')->first()->id,
            'name'=> 'Abidjan',
            'slug'=> 'abidjan',
        ]);

        City::firstOrCreate([
            'country_id'=> Country::where('slug','CI')->first()->id,
            'name'=> 'BOUAKE',
            'slug'=> 'bouake',
        ]);

        City::firstOrCreate([
            'country_id'=> Country::where('slug','CI')->first()->id,
            'name'=> 'KOROHGO',
            'slug'=> 'korohgo',
        ]);

        City::firstOrCreate([
            'country_id'=> Country::where('slug','CI')->first()->id,
            'name'=> "M'BATTO",
            'slug'=> "m'batto",
        ]);
    }
}
