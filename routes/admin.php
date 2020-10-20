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

//Route::get('/', function () {
//    return view('welcome');
//});
// route paramters

Route::get('/admin/{id}', function ($id){
    return $id;
})->name('a');
Route::get('/admin', function (){
    return "Sting Hello world";
})->name('b');
//route namespace
Route::namespace('Front')->group(function (){
    // all route only access controller or methods in folder name Front
    //Route::get('users3', 'UserController@index')->middleware('auth');
});
Route::get('check', function(){
    return "middleware";
});
Route::group(['prefix' => 'admin'], function (){
    Route::get('second0', "Admin\SecondController@showString0");
    Route::get('second1', "Admin\SecondController@showString1");

});
//Route::get('login', function (){
//    return "must be vist this route login";
//})->name('login');
