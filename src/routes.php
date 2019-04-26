<?php

Route::post('comments', '\Kubill\Comments\CommentsController@store');
Route::delete('comments/{comment}', '\Kubill\Comments\CommentsController@destroy');
Route::put('comments/{comment}', '\Kubill\Comments\CommentsController@update');
Route::post('comments/{comment}', '\Kubill\Comments\CommentsController@reply');