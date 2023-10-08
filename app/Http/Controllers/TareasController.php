<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class TareasController extends Controller
{
    public function Listar(Request $request){
        
        return Tarea::all();
    }

    public function ListarUno(Request $request, $id){

        return Tarea::findOrFail($id);
    }

    public function CrearTarea(Request $request){

        $tarea = new Tarea();
        $tarea->titulo = $request->input('titulo');
        $tarea->contenido = $request->input('contenido');
        $tarea->estado = $request->input('estado');
        $tarea->autor = $request->input('autor');
        $tarea->save();

        return response()->json([ 'Tarea creada correctamente']);

    }

    public function ModificarTarea(Request $request, $id){

        $tarea = Tarea::findOrFail($id);
        $tarea->titulo = $request->input('titulo');
        $tarea->contenido = $request->input('contenido');
        $tarea->estado = $request->input('estado');
        $tarea->autor = $request->input('autor');
        $tarea->save();

        return response()->json([ 'Tarea modificada correctamente']);

    }
    
    public function EliminarTarea(Request $request, $id){

        $tarea = Tarea::findOrFail($id);
        $tarea-> delete();

        return response()->json([ 'Tarea eliminada']);

    }
}
