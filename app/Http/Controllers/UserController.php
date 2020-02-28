<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    //
    public function index()
    {
        $users = DB::select('select * from names', [1]);
                         // FOLDER.VIEW  VAR NAME => DATA
        return view('user.index', ['users' => $users]);
    }
}
