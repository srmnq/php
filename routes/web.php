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
    return view('index', ['products' => App\Product::take(4)->get()]);
});

// render a singel ressource
Route::get(
    '/products/{product}',
    'ProductController@show'
);

// render a list of ressource
Route::get(
    '/products',
    'ProductController@index'
);

// show a view to create a ressource
Route::get(
    '/products/create',
    'ProductController@create'
);

// create a ressource
Route::post(
    '/products',
    'ProductController@store'
);
// show a edit an existing ressource

Route::get(
    '/products/{product}/edit',
    'ProductController@edit'
);
// persist an edited ressource
Route::put(
    '/products/{product}',
    'ProductController@update'
);
// delete a ressource
Route::delete(
    '/products/{product}',
    'ProductController@destroy'
);
// Route::get('/blog/{id}', function ($id) {
//     $routeVariants = ['1' => 'foo', '2' => 'bar', '3' => 'baz'];
//     return view('blog', ['id' => array_key_exists($id, $routeVariants) ? ($routeVariants[$id]) : abort(404)]);
// });


Route::get('/blog/{id}', 'PostController@show');
