<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lapto;

class LaptoController extends Controller
{
    function listalaptos(){
        $compus = Lapto::get();
        return response()->html([

            'lapto'=>$compus,
            'status'=>true
        ]);
    }
    function BuscarPeli(){
        $compus = Lapato::get();
        return response()->json([
            'lapto'=>$compus{id},
            'status'=>true
        ]);
    }
    

}
