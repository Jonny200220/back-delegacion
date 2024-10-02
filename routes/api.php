<?php

use App\Http\Controllers\exampleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(exampleController::class) ->group(function(){
    Route::get("v1/hola", "example");
});
