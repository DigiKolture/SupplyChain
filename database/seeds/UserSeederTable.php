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
        DB::table('admins')->insert([
            'name' => 'Adebayo',
            'email' => 'ade@gmail.com',
            'phone' => '0802457845',
            'password' => bcrypt('ade123'),
            'status' => 1,
            'photo_id' => 1,
            'created_at' => now(),
        ]);

        DB::table('photos')->insert([
            'id' => 1,
            'name' => '1529932498avatar.png',
            'created_at' => now()

        ]);

    }
}
