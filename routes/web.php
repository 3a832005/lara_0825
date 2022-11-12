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
//    return redirect(route('posts.index'));
//練習2使用save方式新增資料
//    $post=new Post();
//    $post->title ='test title';
//    $post->content ='test content';
//    $post->save();
//練習2使用create方式新增資料
//    Post::create([
//        'title'=>'created title',
//        'content'=>'created content',
//    ]);
//    return 'OK!';
//練習3使用find方式查詢資料
//    $post = Post::find(1);
//    echo '標題: '.$post->title.'<br>';
//    echo '內容: '.$post->content.'<br>';
//    dd($post);
//練習3使用all方式查詢資料
//    $posts = Post::all();
//    foreach ($posts as $post){
//        echo '編號: '.$post->id.'<br>';
//        echo '標題: '.$post->title.'<br>';
//        echo '內容: '.$post->content.'<br>';
//        echo '張貼時間: '.$post->created_at.'<br>';
//        echo '--------------------------'.'<br>';
 //   }
//    dd($posts);
//練習3使用where方式查詢資料
//    $posts = Post::where('id','<',10)->orderBy('id','DESC')->get();
//    dd($posts);
//練習4使用update方式更新資料
//    $post = Post::find(1);
//   $post->update([
//        'title' => 'updated title',
//        'content' => 'updated content',
//    ]);
//    return 'update';
//練習4使用save方式更新資料
//    $post = Post::find(1);
//    $post->title = 'saved title';
//    $post->content = 'saved content';
//    $post->save();
//    return 'save update';
//練習5使用delete方式刪除資料
//    $post = Post::find(1);
//    $post->delete();
//    return 'delete';
//練習5使用destroy方式刪除資料
//    Post::destroy(2);
//    return'destroy';
//練習5使用destroy方式刪除多筆資料
//    Post::destroy(3,5,7);
//練習6-1取得Collection
//    $allPosts = Post::all();
//    dd($allPosts);
//練習6-2取得is_feature為1的貼文
//    $featuredPosts = Post::where('is_feature',1)->get();
//    dd($featuredPosts);
//練習6-3取得Model
//    $fourthPost = Post::find(4);
//    dd($fourthPost);
//練習6-4將id由大到小，取得第一筆貼文
//    $lastPosts = Post::orderby('id','DESC')->first();
//    dd($lastPosts);
//練習7-4透過comments()擷取(comments)評論
    $post = Post::find(6);
    echo '標題: '.$post->title.'<br>';
    echo '內容: '.$post->content.'<br>';
    echo '--------------------------'.'<br>';
    $comments = $post->comments;       //$post->comments後面可省略()->get()
    foreach($comments as $comment){
        echo '留言:'.$comment->content.'<br>';
        echo '--------------------------'.'<br>';
    }

});

Route::get('posts',[PostController::class, 'index'])->name('posts.index');
Route::get('post',[PostController::class, 'show'])->name('posts.show');
Route::get('contact',[PostController::class, 'contact'])->name('posts.contact');
Route::get('about',[PostController::class, 'about'])->name('posts.about');
