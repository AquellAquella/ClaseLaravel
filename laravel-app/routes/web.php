<?php

use Illuminate\Support\Facades\Route;

//importar el controlador
//ruta en name space \ nombre del controlador
use App\Http\Controllers\Table_HerosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $variable = "Hola soy una variable";
    $variable2 = "variable";
    return view('welcome', compact('variable','variable2'));
    
    //return view('welcome');
}) ->name('welcome') ;

Route::get('/example', function () {
    $page_title = "Example View";
    return view('example', compact('page_title')); 
}) ->name('example') ;

//Route::get('/heros', function () {}) ->name('heros') ;

Route::get('/heros', [Table_HerosController::class, 'index']) ->name('heros');
Route::get('/heros_women', [Table_HerosController::class, 'index_woman']) ->name('heros_women');
Route::get('/heros_men', [Table_HerosController::class, 'index_man']) ->name('heros_men');