<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index() {
        $data = Train::all();
        return view('home', ["trains" => $data]);
    }
}
