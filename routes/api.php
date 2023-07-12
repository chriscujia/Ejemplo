<?php

use App\Http\Controllers\EjemploController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|

Route::get('/', function(){
    return "appi ok";
});

Route::post('/', function (Request $request){
    return [
        "Nombre" => $request -> nombre,
        "Apellido" => "Cujia"
    ];
});

Route::get('/{id}', function($id){
    return [
        "status" => "ok",
        "id" => $id
    ];
});
*/

Route::get('/ejemplos', [EjemploController::class, 'index']);
Route::get('/ejemplos', [EjemploController::class, 'create']);