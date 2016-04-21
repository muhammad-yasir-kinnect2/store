<?php
Route::group(['namespace' => 'Pasha\Store\Http\Controllers', 'prefix'=>'store'], function(){
    Route::get('/',['as' =>'store','uses' => 'StoreController@index']);
});

