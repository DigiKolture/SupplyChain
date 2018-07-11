<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeederTable extends Seeder
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
            'name' => 'Adebayo',
            'email' => 'ade@gmail.com',
            'password' => bcrypt('ade123'),
            'created_at' => time()
        ]);

    }
}
