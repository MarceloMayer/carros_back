<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function list(){

        $data = [
            "name"=>"marcelo mayer",
            "email"=>"carros@gmail.com",
            "phone"=>"(41) 9999999999"
        ];

        return response()->json($data);
    }
}

