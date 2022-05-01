<?php

use App\Http\Controllers\JogosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/jogos','jogos');

//passando parametros estáticos
//Route::view('/jogos','jogos',['name'=>'GTA']);

//parametros dinamicos
// Route::get('/jogos/{name?}',function($name =null){
//     return view('jogos',['nomejogo' =>$name]);
// });

Route::get('/jogos',[JogosController::class,'index']);