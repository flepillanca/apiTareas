<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class TareasController extends Controller{

    public function Listar(Request $request){
        try{
            $tarea = Tarea::all();

            if ($tarea->count() > 0) {
                return $tarea;
            } else {
                return response()->json(['error' => 'No se encontraron tareas'], 404);
            }
        } catch (\Exception $exception){
            return response()->json(['error'=> 'Ocurrió un error'], 500);
        }
    }


    public function ListarUno(Request $request, $id){
        try{
            return Tarea::findOrFail($id);
        } catch (\Exception $exception){
            return response()->json(['error'=> 'Ocurrió un error'], 500);
        }
    }

    
    public function Crear(Request $request){
        try{
            $tarea = new Tarea();
            $tarea->titulo    = $request->input('titulo');
            $tarea->contenido = $request->input('contenido');
            $tarea->estado    = $request->input('estado');
            $tarea->autor     = $request->input('autor');
            $tarea->save();

            return response()->json([ 'Tarea creada correctamente']);
        } catch (\Exception $exception){
            return response()->json(['error' => 'Ocurrió un error al crear la tarea'], 500);
        }
    }


    public function Modificar(Request $request, $id){
        try{
            $tarea = Tarea::findOrFail($id);
            $tarea->titulo    = $request->input('titulo');
            $tarea->contenido = $request->input('contenido');
            $tarea->estado    = $request->input('estado');
            $tarea->autor     = $request->input('autor');
            $tarea->save();

            return response()->json([ 'Tarea modificada correctamente']);
        } catch (\Exception $exception){
            return response()->json(['error' => 'Ocurrió un error al modificar la tarea'], 500);
        }
    }

    
    public function Eliminar(Request $request, $id){
        try{
            $tarea = Tarea::findOrFail($id);
            $tarea-> delete();

            return response()->json([ 'Tarea eliminada']);
        } catch (\Exception $exception){
            return response()->json(['error' => 'Ocurrió un error al eliminar la tarea'], 500);
        }
    }
}
