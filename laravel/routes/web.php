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


// Route::get('/', function () {
//     return view('welcome');
// });


// page.33
//Route::get('hello', function () {
//   return '<html><body><h1>Hello</h1><p>This is sample page.
 //   </p></body></html>';
//});


// page.36, 38
// Route::get('hello/{msg?}', function ($msg='no message.') {

// $html = <<<EOF
// <html>
// <head>
// <title>Hello</title>
// <style>
// body { font-size:16pt; color:#999; }
// h1 { font-size:100pt; text-align:right; color:#eee;
//     margin:-40px 0px -50px 0px; }
// </style>
// </head>
// <body>
//     <h1>Hello</h1>
//     <p>{$msg}</p>
//     <p>これは、サンプルで作ったページです。</p>
// </body>
// </html>
// EOF;

// return $html;

// });


// page.44
// Route::get('hello/{id?}/{pass?}', 'HelloController@index');


// page.47
// Route::get('hello', 'HelloController@index');
// Route::get('hello/other', 'HelloController@other');


// page.54 シングルアクションコントローラー
// Route::get('hello', 'HelloController');


// page.53
Route::get('hello', 'HelloController@index');
