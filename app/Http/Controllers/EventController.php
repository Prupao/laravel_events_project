<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
    $nome = 'Matheus';
    $idade = 29;
    $array = [1,2,3,4,5];
    $arrayNomes = ["Bruno", "Luiz", "Ruan", "Gabriel"]; 
    return view('welcome',
     [
        'nome' => $nome,
        'idade' => $idade,
        'array' => $array,
        'arrayNomes' => $arrayNomes
    ]);
    }

    public function create(){
        return view('events.create');
    }
    
}
