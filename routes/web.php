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

//Route::get('/', function () {
    return view('welcome');
//});

Route::get('/', function()
{
    echo '<pre>';
    $user = User::where('person_id', '=', 1);
    var_dump($user->toArray()); // <---- or toJson()
    echo '</pre>';
    //exit;  <--if you want
});
