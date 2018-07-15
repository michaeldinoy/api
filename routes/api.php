<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
     //echo '<pre>';
    //$user = User::where('person_id', '=', 1);
    //var_dump($user->toArray()); // <---- or toJson()
    //echo '</pre>';
});

Route::apiResource('/products','ProductController');
Route::group(['prefix'=>'products'],function(){
   Route::apiResource('/{product}/reviews','ReviewController');  
});
