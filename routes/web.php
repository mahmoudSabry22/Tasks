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



/*Route::get('posts/{post}', function ($post) {
    return view('AllPosts');
});*/

Route::get('posts/{post}', function ($post) {
    

    $myAllPosts = 
    [
    	'first_blog'   => 'my first blog in site',
    	'second_blog'  => 'adv blog for learning'
    ];

    if(!array_key_exists($post,$myAllPosts))
    {
    	abort(404,'errors');
    }

    return view('AllPosts',[
    	'thePosts' =>$myAllPosts[$post]
    ]);
});