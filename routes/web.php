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
Route::get('/myprj', function () {

    return view('index');
});

Route::get('/test1', function () {
    return "zekraoui";
})->name('nome');
Route::get('/test3', function () {
    return "bachir";
})->name('prenom');


Route::get('/test2/{id?}', function ($id) {
    return "$id";
});
Route::group(['namespace'=> 'Admin'],function (){
    Route::get('second','SecondController@showstring0')->middleware('auth');
    Route::get('second1','SecondController@showstring1');
    Route::get('second2','SecondController@showstring2');
    Route::get('second3','SecondController@showstring3');

});

Route::get('login',function (){
    return 'please access to login';
})->name('login');

Route::resource('news','NewsController');

Route::get('index1','Front\UserController@getIndex');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
