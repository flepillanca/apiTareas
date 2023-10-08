<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Tareas')-> insert([
            [
                'titulo'=>'Tareas de programación',
                'contenido'=>'Crear api de tareas',
                'estado'=>'En progreso',
                'autor'=>'Jacinto Vera'
            ],
            [
                'titulo'=>'Tareas de gestion',
                'contenido'=>'Hacer hi-fi aplicaciones de proyecto',
                'estado'=>'Resuelto',
                'autor'=>'Renato Alvarez'
            ],
            [
                'titulo'=>'Cocinar',
                'contenido'=>'Preparar cena',
                'estado'=>'Pendiente',
                'autor'=>'Maria Clemente'
            ],
        ]);
    }
}
