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
//    return view('welcome');
    return \App\User::paginate(1);
});


//用户模块
//注册页面
Route::get('/register', 'RegisterController@index');
//注册行为
Route::post('/register', 'RegisterController@register');
//登录页面
Route::get('/login', 'LoginController@index');
//登录行为
Route::post('/login', 'LoginController@login');
//登出行为
Route::get('/logout', 'LoginController@logout');
//个人设置页面
Route::get('/user/me/setting', 'UserController@setting');
//个人设置操作
Route::post('/user/me/setting', 'UserController@settingStore');

include_once('admin.php');

//文章列表页
Route::get('/posts', 'PostController@index');
//创建文章
Route::get('/posts/create', 'PostController@create');
Route::post('/posts/', 'PostController@store');
//文章详情页
Route::get('/posts/{post}', 'PostController@show');
//编辑文章
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::put('/posts/{post}', 'PostController@update');
//删除文章
Route::get('/posts/{post}/delete', 'PostController@delete');
//图片上传
Route::post('/posts/img/upload', 'PostController@imageUpload');
//提交评论
Route::post('/posts/{post}/comment', 'PostController@comment');
//赞
Route::get('/posts/{post}/zan', 'PostController@zan');
//取消赞
Route::get('/posts/{post}/unzan', 'PostController@unzan');

//个人中心
Route::get('/user/{user}', 'UserController@show');
//关注
Route::post('/user/{user}/fan', 'UserController@fan');
//取消关注
Route::post('/user/{user}/unfan', 'UserController@unfan');

//专题详情页
Route::get('/topic/{topic}', 'TopicController@show');
//投稿
Route::post('/topic/{topic}/submit', 'TopicController@submit');

//通知
Route::get('/notices', 'NoticeController@index');




