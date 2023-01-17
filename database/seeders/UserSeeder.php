<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Role;
use App\Models\User;
use App\Models\Country;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $role_id = Role::where('key','administrator')->first()->id;
       $country_id = Country::where('slug','CI')->first()->id;
       $city_id = City::where('slug','abidjan')->first()->id;

       User::firstOrCreate([
        'name'      =>  'Admin',
        'username'  =>  'admin',
        'email'  =>  'admin@admin.com',
        'email_verified_at'  => now(),
        'password'  =>  Hash::make('password'),
        'remember_token'  =>  Str::random(10),
        'role_id'  =>  $role_id,
        'country_id'  =>  $country_id,
        'city_id'  =>  $city_id,
        'last_seen'  =>  null,

       ]);
    }
}
