<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Definimos el arreglo de datos a insertar
        $data = array([

            'nombre'=>'Alejandra Lopez',
            'edad'=>20,
            'categoria'=>'A',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Guadalupe Guez',
            'edad'=>24,
            'categoria'=>'B',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Mary Carmen',
            'edad'=>19,
            'categoria'=>'C',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Sofia Lopez',
            'edad'=>30,
            'categoria'=>'B',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'cristi foll',
            'edad'=>44,
            'categoria'=>'A',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Rosario Platero',
            'edad'=>19,
            'categoria'=>'B',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Yudith Hernandex',
            'edad'=>17,
            'categoria'=>'C',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Karla Montez',
            'edad'=>22,
            'categoria'=>'C',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'keit floo',
            'edad'=>55,
            'categoria'=>'A',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Sofia Cruz',
            'edad'=>20,
            'categoria'=>'B',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'jeison Part',
            'edad'=>60,
            'categoria'=>'C',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Gustad Estefu',
            'edad'=>18,
            'categoria'=>'A',
            'created_at'=>Carbon::now()
        ]);

        //insertamos la data en la tabla clientes 
        DB::table('clientes')->insert($data); 
    }
}
