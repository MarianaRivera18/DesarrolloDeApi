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
        return response()->json(["productos"=>Tiendas::all()],200);

    }

    public function guardar(Request $request)
    {
       $producto = new Tiendas();
       $producto->nombre = $request->nombre;

        if($producto->save())

        return response()->json(["producto"=>$producto],201);
        return response()->json(null,400);


    }
    public function editar(Request $request, $id){
        $nota = Tiendas::find($id);
        $nota->nombre = $request->nombre;
        $nota->save();
        return response()->json(["productos"=>Tiendas::all()],200);
    }

    public function eliminar($id){
        $nota = Tiendas::find($id);
        $nota->delete();
        return response()->json(["productos"=>Tiendas::all()],200);
    }
   
}