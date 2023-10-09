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

Route::get("/Listar", [TareasController::class, "Listar"]);
Route::get("/Listar/{id}", [TareasController::class, "ListarUno"]);
Route::get("/ListarDato/{dato}", [TareasController::class, "ListarDato"]);
Route::post("/Crear", [TareasController::class, "Crear"]);
Route::put("/Modificar/{id}", [TareasController::class, "Modificar"]);
Route::delete("/Eliminar/{id}", [TareasController::class, "Eliminar"]);

