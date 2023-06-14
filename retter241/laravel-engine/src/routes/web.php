<?php

/*use laraverEngine;

Route::get('greet', function($) {
    $oGreetr = new laraverEngine();
    return $oGreetr->greet();
});*/

Route::group(['middleware' => 'web'], function () {
   Route::get('/test2', function () {

   return view('engine.base');
}); 
}

);



