<?php



Route::get('/', 'PagesController@index' );
Route::get('/about', 'PagesController@about' );
Route::get('/service', 'PagesController@service' );
Route::get('/partners', 'PagesController@partners' );
Route::get('/public', 'PagesController@public' );
Route::get('/residential', 'PagesController@residential' );
Route::get('/hospitality', 'PagesController@hospitality' );
Route::get('/retail', 'PagesController@retail' );
Route::get('/other', 'PagesController@other' );
Route::get('/ecsp', 'PagesController@ecsp' );












Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store')->name('contact.store');
