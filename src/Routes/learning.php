<?php

Route::group(['prefix'=>'learning', 'middleware'=>['web','learning'], 'namespace'=>'Zym1990\Learning\Controllers'],function(){
    Route::get('test', "LearningController@index");
});