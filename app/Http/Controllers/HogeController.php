<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HogeController extends Controller
{
    public function index()
    {
        $items = DB::table('hoges')->get();
        return view("index", ['items' => $items]);
    }
}
