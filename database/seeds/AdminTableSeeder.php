<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
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
            ['id'=>1, 'name' => 'admin', 'email' =>'admin@gmail.com', 'password' => bcrypt('adminadmin'),  'phone'=>'64474444']

        ]);
    }
}
