<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogosController extends Controller
{
   public function index(){

    //PASSANDO PARÂMETROS

    $id="1";
    $nome="Victor";
     
    return view('jogos.index',['id'=>$id,'nome'=>$nome]);
  
    }
}


