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

Route::get('/testmodel', function(){
	$query = App\Post::all();
	return $query;
});
//mencari model berdasarkan id
Route::get('/testmodel1', function(){
	$query = App\Post::find(1);
	return $query;
});
//mencari model berdasarkan title
Route::get('/testmodel2', function(){
	$query = App\Post::where('title', 'like', '%cepat nikah%')->get();
	return $query;
});
//mengubah record, (hapus semua isi function)
Route::get('/testmodel3', function(){
	$post = App\Post::find(1);
	$post->title = "Ciri Keluarga Sakinah";
	$post->save();
	return $post;
});

Route::get('/siswa', function(){
	$sis = App\siswa::all();
	return $sis;
});

Route::get('/siswa2', function(){
	$sis = App\siswa::find(2);
	return $sis;
});

Route::get('/siswa3', function(){
	$sis = App\siswa::where('nama', 'like', '%iswanto%')->get();
	return $sis;
});

Route::get('/siswa4', function(){
	$sis = App\siswa::find(2);
	$sis->nama = "Tantan Andriansyah";
	$sis->tanggal_lahir= "2000-04-19";
	$sis->jenis_kelamin="Laki-laki";
	$sis->save();
	return $sis;
});

Route::get('/about', function(){
	return view('about');
});

Route::get('/latihan', function(){
	return view('latihan');
});

Route::get('/latihan2', function(){
	return view('latihan2');
});

Route::get('/latihan3', function(){
	return view('latihan3');
});
