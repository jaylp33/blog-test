<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaryController extends Controller
{
    public function gary()
    {
        $newVariable = 'Hello Gary!';

        $array = ['Gary', 'Victor', 'John', 'Doe'];

        return view('index', [
            'oldVariable' => $newVariable,
            'array' => $array
        ]);
    }
}
