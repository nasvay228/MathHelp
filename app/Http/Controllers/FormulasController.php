<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulasController extends Controller
{

    public function details($id)
    {
        $text = "";
        $formula = "";
        if ($id == 1)
        {
            $text = "Формула площади прямоугольника: a*b";
            $formula = 'values[0]*values[1]';

        }
        if ($id == 2)
        {
            $text = "Формула площади круга : πR²";
            $formula = 'Math.PI*values[0]*values[0]';
        }
        if ($id == 3)
        {
            $text = "Формула площади параллелограма : a*h";
            $formula = 'values[0]*values[1]';
        }
        return view('articles/details', [
            'text' => $text,
            'formula' => $formula
        ]);
    }
    public function forms($id){

    }
}
