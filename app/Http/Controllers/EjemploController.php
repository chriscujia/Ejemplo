<?php

namespace App\Http\Controllers;

use App\Models\Ejemplo;
use Illuminate\Http\Request;

class EjemploController extends Controller
{
    function index(){
        $result = Ejemplo::get();

        return $result;        
    }

    function create(){
       
            
    }
}
