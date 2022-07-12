<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\train;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        // dd($trains);
        return view('home',compact('trains'));
    }
}
