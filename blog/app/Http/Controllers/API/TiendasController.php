<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modelos\Tiendas;

class TiendasController extends Controller
{
    public function index($id = null){
        
        if($id)
        return response()->json(["producto"=>Tiendas::find($id)],200);
        return response()->json(["productos">Tiendas::all()],200);

    }
  
}
