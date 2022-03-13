<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 6; $i++) {
            DB::table('people')->insert([
                'name' => Str::random(10),
                'mail' => Str::random(10).'@naonao.com',
                'age' => 20 + $i,
            ]);
        }
    }
}
