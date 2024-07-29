<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Bima Surya','title' => 'About Page']);
});

Route::get('/posts', function () {
    return view('posts' , ['title' => 'Blog Page', 'posts'=> [
        [
            'title' => 'Judul Artikel 1',
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'author' => 'Bima Surya',
            'body' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
        ],
        [
            'title' => 'Judul Artikel 2',
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'author' => 'Bima Surya',
            'body' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos. lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
        ]
    ] ]);
});

Route ::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'title' => 'Judul Artikel 1',
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'author' => 'Bima Surya',
            'body' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
        ],
        [
            'title' => 'Judul Artikel 2',
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'author' => 'Bima Surya',
            'body' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos. lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
        ]
        ];

        $post = Arr::first($posts, function($posts) use($slug) {
            return $posts['slug'] == $slug;
        });

        return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact' , ['title' => 'Contact Page']);
});
