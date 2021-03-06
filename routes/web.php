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

Route::get( '/', function () {
	return view( 'welcome' );
});

Auth::routes();

Route::get( 'logout', 'Auth\LoginController@logout' )->name( 'logout' );

Route::get( '/home', 'HomeController@index' )->name( 'home' );

## Tickets
Route::get( 'tickets', 'TicketsController@index' );
Route::get( 'new-ticket', 'TicketsController@create' );
Route::post( 'new-ticket', 'TicketsController@store' );

Route::group( [ 'prefix' => 'admin', 'middleware' => 'admin' ], function() {
	Route::get( 'tickets', 'TicketsController@index' );
	Route::post( 'close-ticket/{ticket_id}', 'TicketsController@close' );
});
