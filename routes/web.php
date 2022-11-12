<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;
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
//  return redirect(route('posts.index'));
//  $post=new Post();
//  $post->title ='test title';
//  $post->content ='test content';
//  $post->save();

//    Post::create([
//        'title'=>'created title',
//        'content'=>'created content',
//    ]);

//    return 'OK!';

//    $post = Post::find(1);
//    echo '標題: '.$post->title.'<br>';
//    echo '內容: '.$post->content.'<br>';
//    dd($post);

//    $posts = Post::all();
//    foreach ($posts as $post){
//        echo '編號: '.$post->id.'<br>';
//        echo '標題: '.$post->title.'<br>';
//        echo '內容: '.$post->content.'<br>';
//        echo '張貼時間: '.$post->created_at.'<br>';
//        echo '--------------------------'.'<br>';
 //   }
//    dd($posts);

    $posts = Post::where('id','<',10)->orderBy('id','DESC')->get();
    dd($posts);
});

Route::get('posts',[PostController::class, 'index'])->name('posts.index');
Route::get('post',[PostController::class, 'show'])->name('posts.show');
Route::get('contact',[PostController::class, 'contact'])->name('posts.contact');
Route::get('about',[PostController::class, 'about'])->name('posts.about');
