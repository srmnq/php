<?php

namespace App\Http\Controllers;


class PostController extends Controller
{
    public function show($id)
    {

        $routeVariants = ['1' => 'foo', '2' => 'bar', '3' => 'baz'];
        return view('blog', ['id' => array_key_exists($id, $routeVariants) ? ($routeVariants[$id]) : abort(404)]);
    }
}
