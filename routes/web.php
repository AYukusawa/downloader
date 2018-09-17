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
use Masih\YoutubeDownloader\YoutubeDownloader;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info',function(){

$youtube = new YoutubeDownloader('https://www.youtube.com/watch?v=9jI-z9QN6g8');
$result = $youtube->getInfo();
dd($result);

});

Route::post('/watch',[
	'uses' => 'VideoController@download',
	'as'   => 'download'
]);
