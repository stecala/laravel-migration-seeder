<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $trains = Train::all(); //select * mysql
        return view('welcome', compact('trains'));
    }
}
