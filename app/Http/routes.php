<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/about', 'StaticController@about');

Route::group(['prefix' => 'backend'], function() {

});

Route::get('/profil/{username}', 'HomeController@profil');
Route::get('check', ['middleware' => ['auth', 'role:participant'], function() {
    return "Berhasil mengakses history event.";
}]);

Route::get('/backend', function() {

    if (Gate::check('access.backend')) {
        return 'Berhasil...!!!!';
    }

    return abort(403);

});

Route::get('/umah', 'HomeController@umah');
Route::get('/griyo', 'HomeController@griyo');



Route::group(['prefix' => 'api'], function() {
    Route::post('authenticate', 'Auth\AuthController@getToken');

    Route::group(['middleware' => 'jwt.auth'], function() {

        Route::get('users', function() {
            return App\User::all();
        });
    });
});