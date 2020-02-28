<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WithController extends Controller
{
    //
    public function show($id)
    {

        return view('student')->with('id',$id);
    }
}
