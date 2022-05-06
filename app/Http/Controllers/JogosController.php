<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogo;

class JogosController extends Controller
{
   public function index(){

    //PASSANDO PARÂMETROS

    $jogos=Jogo::all();
     //dd($jogos);
    return view('jogos.index',['jogos'=>$jogos]);
  
    }
}


