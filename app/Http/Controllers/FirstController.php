<?php

namespace App\Http\Controllers;



class FirstController extends Controller
{
    public function show(){
        return ("I'm your first controller");
    }

    public function notShow(){
        echo('another excellent try');
    }
}