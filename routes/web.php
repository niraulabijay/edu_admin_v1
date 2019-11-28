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

Route::get('/', function (){
    return view('admin.index');
});

Route::group(['prefix' => '/admin'], function (){

    Route::get('/dashboard','admin\DashboardController@index')->name('admin_dashboard');

//    Route::group(['prefix' => '/courses'], function (){
//       Route::get('/','admin\CourseController@index')->name('courses');
//       Route::post('/store','admin\CourseController@store')->name('admin_courses');
//       Route::post('/destroy','admin\CourseController@destroy')->name('admin_courses');
//       Route::get('/edit','admin\CourseController@edit')->name('admin_courses');
//       Route::post('/edit/{id}','admin\CourseController@update')->name('admin_courses');
//    });
//
//    Route::group(['prefix' => '/subjects'], function (){
//        Route::get('/','admin\CourseController@index')->name('admin_courses');
//        Route::post('/store','admin\CourseController@store')->name('admin_courses');
//        Route::post('/destroy','admin\CourseController@destroy')->name('admin_courses');
//        Route::get('/edit','admin\CourseController@edit')->name('admin_courses');
//        Route::post('/edit/{id}','admin\CourseController@update')->name('admin_courses');
//    });
//
//    Route::group(['prefix' => '/subSubjects'], function (){
//        Route::get('/','admin\CourseController@index')->name('admin_courses');
//        Route::post('/store','admin\CourseController@store')->name('admin_courses');
//        Route::post('/destroy','admin\CourseController@destroy')->name('admin_courses');
//        Route::get('/edit','admin\CourseController@edit')->name('admin_courses');
//        Route::post('/edit/{id}','admin\CourseController@update')->name('admin_courses');
//    });
//
//    Route::group(['prefix' => '/chapters'], function (){
//        Route::get('/','admin\CourseController@index')->name('admin_courses');
//        Route::post('/store','admin\CourseController@store')->name('admin_courses');
//        Route::post('/destroy','admin\CourseController@destroy')->name('admin_courses');
//        Route::get('/edit','admin\CourseController@edit')->name('admin_courses');
//        Route::post('/edit/{id}','admin\CourseController@update')->name('admin_courses');
//    });
});