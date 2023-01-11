<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index() {
        
        $nome = "Jorge";
        $idade = 31;

        $arr = [1,2,3,4,5,6];

        $nomes = ["Jorge", "Maria", "pedro"];

        return view('welcome', 
        [
            'nome' => $nome, 
            'idade' => $idade, 
            'profissao' => "programador",
            'arr' => $arr,
            'nomes' => $nomes
        ]);

    }

    public function create() {
        return view('events.create');
    }

}
