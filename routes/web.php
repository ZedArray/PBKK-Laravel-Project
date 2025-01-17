<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => "Home"]);
});

Route::get('/about', function () {
    return view('about', ["name" => "Hafidzuddin Rizqy Amirullah", "title" => "About"]);
});

Route::get('/blog', function () {
    return view('blog', ["title" => "Blog", 'posts' => Post::all()]);
});

Route::get('/blog/{post:slug}', function (Post $post) {

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact"]);
});