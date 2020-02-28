<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function()
{
    //            VIEW NAME     VARIABLE => VALUES
    return view('About',['name'=>'PHPTPOINT', 'number' => '666']);
});
//   POST/GET
Route::get('/show','ViewController@show');
//         URL PATH
Route::get('/details', 'ShowController@show');
//                    CONTROLLER   @ FUNCTION
Route::get('/names', 'NameController@show');
Route::get('/with/{id}','WithController@show');
Route::get('/compact/{n}', 'CompactController@show');
Route::get('/details/{id}/{n}/{p}', 'CompactController@show');
Route::get('/validation','ValidationController@form');
Route::post('/validation','ValidationController@validateform');
Route::get('/database','UserController@index');
