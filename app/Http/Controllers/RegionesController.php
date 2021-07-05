<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regiones;


class RegionesController extends Controller
{
    public function index(){

        return Regiones::all();
        
     }
}
