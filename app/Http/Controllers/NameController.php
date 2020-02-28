<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameController extends Controller
{
    //
    public function show()
    {
        return view('names',['n1'=> 'Yanik','n2'=>'Nonu','n3'=>'Believe Master']);
    }
}
