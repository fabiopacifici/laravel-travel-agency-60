<?php

namespace App\Http\Controllers;

use App\Travel;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travel_list = Travel::all();
        return view('travel.index', compact('travel_list'));
    }

 
    /**
     * Display the specified resource.
     *
     * @param  \App\Travel  $travel
     * @return \Illuminate\Http\Response
     */
    public function show(Travel $travel)
    {
        return view('travel.show', compact('travel'));
    }

}
