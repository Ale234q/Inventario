<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Definimos el arreglo de datos a insertar
        $data = array([
            'nombre'=>'Alejandra Lopez',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Guadalupe Guez',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Mary Carmen',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Sofia Lopez',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'cristi foll',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Rosario Platero',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Yudith Hernandex',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Karla Montez',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'keit floo',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Sofia Cruz',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'jeison Part',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=>'Gustad Estefu',
            'created_at'=>Carbon::now()
        ]);

        //insertamos la data en la tabla marcas 
        DB::table('categorias')->insert($data);
    }
}
