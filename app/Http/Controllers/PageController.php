<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Controladores

    public function home()
    {
        return view('Home');
    }

    public function blog()
    {
        //CONSULTA LISTADO
        $posts = [
            ['id' => 1, 'title' => 'php', 'slug' => 'php'],
            ['id' => 2, 'title' => 'laravel', 'slug' => 'laravel'],
        ];
        return view('blog', ['post' => $posts]);
    }

    public function post($slug)
    {
        //CONSULTA POST
        $post = $slug;
        return view('post', ['post' => $post]);
    }
}
