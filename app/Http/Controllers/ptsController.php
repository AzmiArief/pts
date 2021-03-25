<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ptsController extends Controller
{
    public function index()
    {
        $data = Latihan::get();
        //dd($data);
        return view('data', compact('data'));
    }
    public function edit()
    {
        $data = Latihan::where('i',$id)->first();
        return view('editData', compact('data'));
    }
}
