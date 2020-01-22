<?php

 Route::group(['namespace' => 'be'], function(){
      
    Route::get('/', 'BlogController@index');

    Route::get('/{tag}/{slug}', 'BlogController@post');

});
