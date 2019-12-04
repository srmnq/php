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

Route::get('/fische', function () {
    $name = request('name');
    return view('fische', ['name' => $name]);
});

// Route::get('/blog/{id}', function ($id) {
//     $routeVariants = ['1' => 'foo', '2' => 'bar', '3' => 'baz'];
//     return view('blog', ['id' => array_key_exists($id, $routeVariants) ? ($routeVariants[$id]) : abort(404)]);
// });


Route::get('/blog/{id}', 'PostController@show');
