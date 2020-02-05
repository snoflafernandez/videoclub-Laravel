<?php
Route::get('/','HomeController@getHome');

Route::group(['middleware'=>'auth'],function(){
	Route::get('catalog/index','CatalogController@getIndex');
	Route::get('catalog/show/{id}','Catalogcontroller@getShow');
	Route::get('catalog/create','CatalogController@getCreate');
	Route::get('catalog/edit/{id}','CatalogController@getEdit');
	Route::post('catalog/create','Catalogcontroller@postCreate');
	Route::put('catalog/edit/{id}','CatalogController@putEdit');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');