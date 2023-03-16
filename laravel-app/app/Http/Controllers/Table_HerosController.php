<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Importar el modelo con namespace
use App\Models\table_heros;

class Table_HerosController extends Controller
{
    public function index () {
        $page_title = "Super Heroes";

        //Consultas precargadas: select * from table_heros
        $superheros = table_heros::all();

        //Consultas precargadas: select * from table_heros where
        // -> get() en todo el resto de query fuera de all()
        $men = table_heros::where('gender','=','Male')->get();

        return view('superheros', compact('page_title','superheros'));
    }

    public function index_woman () {
        $page_title = "Super Heroes - Only Female Members";

        $women = table_heros::where('gender','=','Female')->get();

        return view('superheros_women', compact('page_title','women'));
    }

    public function index_man () {
        $page_title = "Super Heroes - Only Male Members";

        // -> get() en todo el resto de query fuera de all()
        $men = table_heros::where('gender','=','Male')->get();

        return view('superheros_men', compact('page_title','men'));
    }
}
