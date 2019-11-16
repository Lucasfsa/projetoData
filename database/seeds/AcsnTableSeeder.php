<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AcsnTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('acsn')->insert([
            'contrato'=> 20044,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('acsn')->insert([
            'contrato'=> 9937,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('acsn')->insert([
            'contrato'=> 20049,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('acsn')->insert([
            'contrato'=> 20056,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
