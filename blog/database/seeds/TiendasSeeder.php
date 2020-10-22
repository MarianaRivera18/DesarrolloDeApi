<?php

use Illuminate\Database\Seeder;

class TiendasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tiendas')->insert([

            [
                'nombre'=>'globo'
            ],
            [
                'nombre'=>'late'
            ],
            [
                'nombre'=>'claras'
            ],



        ]);
        DB::table('descripciones')->insert([

            [
                'descripscion'=>'grande'
            ],
            [
                'descripcion'=>'grande'
            ],
            [
                'descripcion'=>'grande'
            ],



        ]);
    }
}
