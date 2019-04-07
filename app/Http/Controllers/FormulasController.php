<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulasController extends Controller
{

    public function details($id)
    {
        $text = "";
        if ($id == 1)
        {
            return "Формула квадрата";
        }
        if ($id == 2)
        {
            return "Формула круга";
        }
        if ($id == 3)
        {
            return "Формула твоей мамы";
        }
        return view('articles/details', ['text' => $text]);
    }
}
