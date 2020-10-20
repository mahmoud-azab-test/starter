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
    $data = [];
    $data['id'] = 5;
    $data['name'] = "Ahmed";
    return view('welcome', $data)->with('data2', 5);
});
// route paramters

//Route::get('/show-number/{id}', function ($id){
//    return $id;
//})->name('a');
//Route::get('/show-string', function (){
//    return "Sting Hello world";
//})->name('b');
//Route::group(['prefix' => "users"], function (){
//    Route::get('/', function(){
//        return "Hello World";
//    });
//    Route::get('show', "UserController@show");
//    Route::delete('delete', "UserController@delete");
//    Route::put('update', "UserController@update");
//    Route::post('save', "UserController@save");
//});
//Route::get('forPerson', function (){
//    return "with Auth";
//
//})-> middleware('auth');
//
//Route::group(['prefix' => 'users'], function(){
//    // set of routes
//    Route::get('/hello',function(){
//        return  "work";
//    });
//});
//Route::group(['namespace' => 'Admin'], function (){
//    Route::get('second0', "SecondController@showString0");
//    Route::get('second1', "SecondController@showString1");
//
//});
//Route::get('login', function (){
//    return "must be visit this route login";
//})->name('login');
//
//Route::resource('news', "NewsController");
Route::get('', "Front\UserController@getIndex");
Route::get('index', "Front\UserController@getIndex");
Route::get('landing', function (){
    return view('landing');
});
Route::get('/about', function(){
    return view('about');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
