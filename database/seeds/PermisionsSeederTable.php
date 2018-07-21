<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermisionsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('permissions')->insert([
            'name' => 'CreateUsers',
            'guard_name' => 'admin',
            'for' => 'user',
            'created_at' => now()
        ]);
        DB::table('permissions')->insert([
            'name' => 'EditUsers',
            'guard_name' => 'admin',
            'for' => 'user',
            'created_at' => now()
        ]);
        DB::table('permissions')->insert([
            'name' => 'DeleteUsers',
            'guard_name' => 'admin',
            'for' => 'user',
            'created_at' => now()
        ]);
        DB::table('permissions')->insert([
            'name' => 'RoleCRUD',
            'guard_name' => 'admin',
            'for' => 'other',
            'created_at' => now()
        ]);
        DB::table('permissions')->insert([
            'name' => 'PermissionCRUD',
            'guard_name' => 'admin',
            'for' => 'other',
            'created_at' => now()
        ]);
    }
}
