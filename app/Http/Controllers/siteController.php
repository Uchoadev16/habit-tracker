<?php

namespace App\Http\Controllers;


class siteController extends Controller
{
    public function index(){

    $nome = "Pedro Uchôa";
    $habits = ['ler', 'escreve', 'falar'];
    
    return view("home", [
        "name" => $nome,
        "habits"=> $habits
        ]);
    }
}
