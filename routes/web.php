<?php

use App\Http\Livewire\Help;
use App\Http\Livewire\Home;
use App\Http\Livewire\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', Home::class)->name('home.index');
Route::get('/help', Help::class)->name('help.index');
Route::get('/post', Post::class)->name('post.index');
