<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Bem vindo ao Hotel Tertulio's";
        return view('pages.index')->with('title', $title);
    }

    public function reserva(){
        $title = "Reserva";
        return view('pages.reserva')->with('title', $title);
    }
}
