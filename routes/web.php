<?php

use App\Contacts;

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
    $contacts = Contacts::all();
    return view('pages.contacts',compact( 'contacts' ));
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');	
Route::get('/contacts', 'ContactsController@index');
Route::get('/contact/{id}', 'ContactsController@view');
Route::post('/contact/add', 'ContactsController@create');
Route::put('contacts/{id}', 'ContactsController@update');
Route::delete('/contact/{id}', 'ContactsController@delete');



