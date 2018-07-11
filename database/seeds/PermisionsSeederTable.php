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
            'for' => 'user',
            'created_at' => time()
        ]);
        DB::table('permissions')->insert([
            'name' => 'EditUsers',
            'for' => 'user',
            'created_at' => time()
        ]);
        DB::table('permissions')->insert([
            'name' => 'DeleteUsers',
            'for' => 'user',
            'created_at' => time()
        ]);
        DB::table('permissions')->insert([
            'name' => 'RoleCRUD',
            'for' => 'other',
            'created_at' => time()
        ]);
        DB::table('permissions')->insert([
            'name' => 'PermissionCRUD',
            'for' => 'other',
            'created_at' => time()
        ]);
    }
}
