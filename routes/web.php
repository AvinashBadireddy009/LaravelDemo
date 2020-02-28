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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    
});

Route::get('/contacts/create', [
    'uses' => 'ContactController@create',
    'as'   => 'contacts.create',
]);

Route::post('/contacts/store', [
        'uses' => 'ContactController@store',
        'as'   => 'contacts.store',
]);

Route::get('/contacts/index', [
        'uses' => 'ContactController@index',
        'as'   => 'contacts.index',
]);

Route::get('/contacts/{id}/edit', [
        'uses' => 'ContactController@edit',
        'as'   => 'contacts.edit',
]);

Route::delete('/contacts/{id}/delete', [
        'uses' => 'ContactController@destroy',
        'as'   => 'contacts.destroy',
]);

Route::patch('/contacts/{id}/update', [
        'uses' => 'ContactController@update',
        'as'   => 'contacts.update',
]);
