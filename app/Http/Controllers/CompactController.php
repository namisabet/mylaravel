<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompactController extends Controller
{
    //
    public function show($n)
    {
        return view('student',compact('id','n','p'));
    }
}
