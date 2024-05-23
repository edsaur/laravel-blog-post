<?php

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('blogs.main');
});

Route::get('blogs', function () {
    $blog = Blog::all();
    return view('blog_list', ['blogs' => $blog]);
})->name('blogs.main');

Route::get('blog/{blog}', function(Blog $blog) {
    return view('blog', ['blog' => $blog]);
})->name('blogs.blog');

route::get('add-blog', function() {
    return view('add-blog');
})->name('blogs.addBlog');


Route::post('add-blog', function (BlogRequest $request) {
    $blog = Blog::create($request->validated());
    
});