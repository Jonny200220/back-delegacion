<?php

namespace App\Http\Controllers;

use App\Models\Areas;
// use Illuminate\Http\Request;
// Where, ellocuent orm, 

class exampleController extends Controller
{
    public function example(){
        return response()->json([ "mensaje"=> Areas::all() ], 200);
    }
}
