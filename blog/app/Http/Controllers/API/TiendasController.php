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
   
    public function actualizar(Request $request,$id){
        $actualizar = Tiendas::find($id);
        $actualizar->nombre = $request-> nombre;
        $actualizar->save();
        return response()->json(200);
    }
    public function eliminar($id){
        $proel = Tienda::finOrFail($id);
        $proel->eliminar();
        return response()->json(["productos"=>Tiendas::all()],200);
    }
   
}