<?php

namespace App\Http\Controllers;

use App\Models\marcas;
use Illuminate\Http\Request;

class MarcasController extends Controller
{
    public function index() {
        $marcas = Marcas::all();
        return response()->json([ "message"=> 'hola desde marcas', $marcas]);
    }

    public function show(){
        
    }
}
