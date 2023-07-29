<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Train;
use App\Models\videogame;

class PageController extends Controller
{
    public function index(){
        $now = date('Y-m-d', strtotime(now()));
        $trains = Train::where('data_partenza', '>=', $now)->get();
        $videogame = videogame::all();
        return view('home', compact('trains', 'videogame'));
    }
}
