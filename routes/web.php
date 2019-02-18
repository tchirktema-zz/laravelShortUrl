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
use App\Url;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/',function(){
	// dd(request('url'));
	// Verifier si l'url a deja un raccourci
	$url = Url::where('url',request('url'))->first();

	if($url){
		return view('welcome')->with('shortened',$url->shortened);
	}
});
