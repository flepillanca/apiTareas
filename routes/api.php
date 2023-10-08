<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareasController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/ListarTareas", [TareasController::class, "Listar"]);
Route::get("/ListarTareas/{id}", [TareasController::class, "ListarUno"]);
Route::post("/CrearTarea", [TareasController::class, "CrearTarea"]);
Route::put("/ModificarTarea/{id}", [TareasController::class, "ModificarTarea"]);
Route::delete("/EliminarTarea/{id}", [TareasController::class, "EliminarTarea"]);

