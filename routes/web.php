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

Route::get('/action', function () {
    return view('pages.action'); 
})-> name('nameaction');

Route::get('/about', function () {
    return view('pages.about'); 
})-> name('nameabout');

Route::get('/join', function () {
    return view('pages.join'); 
})-> name('namejoin');

Route::get('/news', function () {
    return view('pages.news'); 
})-> name('namenews');

Route::get('/contact', function () {
    return view('pages.contact'); 
})-> name('namecontact');

Route::get('/teacher/{index}', function () {
    $teacer = ['Channak', 'Ronan', 'Sieha', 'Rady', 'Rith'];
    
});
