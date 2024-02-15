<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);
        DB::table('roles')->insert([
            'name' => 'customer',
            'guard_name' => 'web',
        ]);
        DB::table('roles')->insert([
            'name' => 'service-provider',
            'guard_name' => 'web',
        ]);
    }
}
