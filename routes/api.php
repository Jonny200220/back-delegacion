<?php

use App\Http\Controllers\exampleController;
use App\Http\Controllers\MarcasController;
use Illuminate\Support\Facades\Route;

Route::get("v1/healthcheck", function(){
    return response()->json(['message' => 'El servidor funciona bien...']);
});
    
Route::controller(exampleController::class) ->group(function(){
    Route::get("v1/hola", "example");
});

Route::controller(exampleController::class) ->group(function(){
    Route::get("v1/ruta_marcas", "example2");
});

/*
get-> primer valor =ruta_name
get-> segundo valor =function_name in controller
*/ 

Route::controller(MarcasController::class)->group(function (){
   Route::get("v2/hola2", "example2" ); 
});