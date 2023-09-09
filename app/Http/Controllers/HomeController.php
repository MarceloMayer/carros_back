<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $data = [
            [
            "model"=>"Ford Fiesta",
            "image"=>"imagemdocarro1.url",
            "info"=>"Titanium plus 1.6 16v",
            "price"=> 50000
            ],
            [
            "model"=>"Ford Focus",
            "image"=>"imagemdocarro2.url",
            "info"=>"Titanium plus 2.0 16v",
            "price"=> 58000
            ],
            [
            "model"=>"Ford ka",
            "image"=>"imagemdocarro3.url",
            "info"=>"Titanium plus 1 16v",
            "price"=> 35000
            ],
        ];

        return response()->json($data);
    }
}
