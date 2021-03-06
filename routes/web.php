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

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
    Route::get('tinkeringVideojs', function ()    {
        $data = [];
        return view('tinkeringVideojs',$data);
    })->name('tinkeringVideojs');

    Route::get('tinkeringVideo', 'TinkeringVideoController@index')->name('tinkeringVideo');

    Route::get('d3demo', 'D3demoController@index')->name('d3demo');

    Route::get('svgslider', function ()    {
        $data = [];
        return view('svgslider',$data);
    })->name('svgslider');

    Route::get('clock', function ()    {
        $data = [];
        return view('clock',$data);
    })->name('clock');

});
