<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::firstOrCreate([
            'name' => 'Administrator',
            'key' => 'administrator',
            'color' => 'text-red-700 bg-red-100 dark:text-red-100 dark:bg-red-700 ',
        ]);

        Role::firstOrCreate([
            'name' => 'Admin',
            'key' => 'admin',
            'color' => 'text-orange-700 bg-orange-100 dark:text-white dark:bg-orange-600 ',
        ]);

        Role::firstOrCreate([
            'name' => 'Moderator',
            'key' => 'moderator',
            'color' => 'text-green-700 bg-green-100 dark:text-green-700 dark:bg-green-100 ',
        ]);

        Role::firstOrCreate([
            'name' => 'User',
            'key' => 'user',
            'color' => 'text-gray-700 bg-gray-100 dark:text-gray-100 dark:bg-gray-700 ',
        ]);

        Role::firstOrCreate([
            'name' => 'Banned',
            'key' => 'banned',
            'color' => 'text-gray-200 bg-gray-700 dark:text-gray-50 dark:bg-gray-400 ',
        ]);

        $permission_administrator = Permission::where('key','!=','banned')->pluck('id')->toArray();

        $admin_role = Role::where('key','administrator')->first();
        $admin_role->permission()->sync($permission_administrator);
    }
}
