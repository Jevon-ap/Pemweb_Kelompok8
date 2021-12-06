<?php

use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "title" => "Homepage",
        "heading" => "Title + LOGO"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Homepage",
        "heading" => "Title + LOGO"
    ]);
});

Route::get('/article', function () {
    return view('article', [
        "title" => "Article",
        "heading" => "Article"
    ]);
});

Route::get('/decks', function () {
    return view('decks', [
        "title" => "Decks",
        "heading" => "Decks"
    ]);
});

Route::get('/tournament', function () {
    return view('tournament', [
        "title" => "Tournament",
        "heading" => "Tournament"
    ]);
});

Route::get('/community-event', function () {
    return view('event', [
        "title" => "Community Event",
        "heading" => "Community Event"
    ]);
});

Route::get('/forum-and-faq', function () {
    return view('forum', [
        "title" => "Forum",
        "heading" => "Forum & FAQ"
    ]);
});

Route::get('/deck-page', function () {
    return view('deckpage', [
        "title" => "Deck Page",
        "heading" => "Decks"
    ]);
});

Route::get('/article-page', function () {
    return view('articlepage', [
        "title" => "Home",
        "heading" => "Article"
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "title" => "Login",
    ]);
});

Route::get('/register', function () {
    return view('register', [
        "title" => "Register",
    ]);
});

