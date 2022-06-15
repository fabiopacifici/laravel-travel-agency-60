<?php

namespace App\Http\Controllers;

use App\Travel;
use Illuminate\Http\Request;

class PageController extends Controller
{
    

    public function index()
    {
        $travel_list = Travel::take(2)->get();
        //dd($travel_list);
        return view('welcome', compact('travel_list'));
    }
}
