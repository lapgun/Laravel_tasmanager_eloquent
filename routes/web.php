<?php
Route::get('/index', 'CustomerController@index')->name('index');
Route::get('{id}/edit', 'CustomerController@showFormEdit')->name('customer.showEdit');
Route::post('{id}/edit','CustomerController@edit')->name('customer.Edit');
Route::get('{id}/delete', 'CustomerController@delete')->name('delete');
Route::get('/show', 'CustomerController@getId');
Route::get('/add','CustomerController@getFromAdd')->name('viewAdd');
Route::post('/add','CustomerController@addForm')->name('add');
Route::get('{id}/view','CustomerController@view')->name('view');
?>