<?php

namespace App\Http\Controllers;

use App\Models\Areas;
use App\Models\Marcas;

// use Illuminate\Http\Request;
// Where, ellocuent orm, 

class exampleController extends Controller
{
    public function example(){
        $consulta = Areas::all();
        return response()->json([ "message"=> 'hola desde example', $consulta ], 200);
    }

    public function example2(){
        $consulta = Marcas::all();
        return response()->json([ "message"=> 'hola desde example_2 hacia marcas', $consulta ], 200);
    }
}