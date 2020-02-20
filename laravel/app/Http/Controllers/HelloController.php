<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// page.52
// use Illuminate\Http\Response;

// class HelloController extends Controller
// {
//     public function index(Request $request, Response $response) {

// $html = <<<EOF
// <html>
// <head>
// <title>Hello/Index</title>
// <style>
// body {font-size:16pt; color:#999; }
// h1 { font-size:120pt; text-align:right; color:#fafafa;
//     margin:-50px 0px -120px 0px; }
// </style>
// </head>
// <body>
//     <h1>Hello</h1>
//     <h3>Request</h3>
//     <pre>{$request}</pre>
//     <h3>Response</h3>
//     <pre>{$response}</pre>
// </body>
// </html>
// EOF;

//         $response->setContent($html);
//         return $response;
//     }
// }


//初期設定

// class HelloController extends Controller
// {

//     public function index($id='noname', $pass='unknown') {

//         return <<<EOF

// <html>
// <head>
// <title>Hello/Index</title>
// <style>
// body {font-size:16pt; color:#999; }
// h1{ font-size:100pt; text-align:right; color:#eee;
//     margin:-40px 0px -50px 0px; }
// </style>
// </head>
// <body>
//     <h1>Index</h1>
//     <p>これは、Helloコントローラーのindexアクションです。</p>
//     <ul>
//         <li>ID: {$id}</li>
//         <li>PASS: {$pass}</li>
//     </ul>
// </body>
// </html>
// EOF;

//     }
//     //
// }


// page.47
// global $head, $style, $body, $end;
// $head ='<html><head>';
// $style = <<<EOF
// <style>
// body {font-size:16pt; color:#999; }
// h1{ font-size:100pt; text-align:right; color:#eee;
//     margin:-40px 0px -50px 0px; }
// </style>
// EOF;
// $body = '</head><body>';
// $end = '</body></head>';

// function tag($tag, $txt) {
//     return "<{$tag}>" . $txt . "</{$tag}>";
// }

// class HelloController extends Controller
// {

//     public function index() {
//         global $head, $style, $body, $end;

//         $html = $head . tag('title','Hello/Index') . $style .
//             $body
//             . tag('h1','Index') . tag('p','this is Index page')
//             . '<a href="/hello/other">go to Other page</a>'
//             . $end;
//         return $html;
//     }

//     public function other() {
//         global $head, $style, $body, $end;

//         $html = $head . tag('title','Hello/Other') . $style .
//             $body
//             . tag('h1','Other') . tag('p','this is Other page')
//             . $end;
//         return $html;
//     }
//     //
// }

// page.50 シングルアクション化
// class HelloController extends Controller
// {

//     public function __invoke() {
//         return <<<EOF
// <html>
// <head>
// <title>Hello</title>
// <style>
// body{ font-size:16pt; color:#999; }
// h1 { font-size:30pt; text-align:right; color:#eee;
//     margin:-15px 0px 0px 0px; }
// </style>
// </head>
// <body>
//     <h1>Single Action</h1>
//     <p>これは、シングルアクションコントローラーのアクションです。</p>
// </body>
// </html>
// EOF;
//     }
// }


// page.62 blade
// class HelloController extends Controller
// {
//     public function index($id='zero') 
// {
//         $data = [
//             'msg'=>'これはコントローラから渡されたメッセージです。',
//             'id'=>$id
//         ];
//         return view('hello.index', $data);
// }
// };


// page.65~ blade
// class HelloController extends Controller
// {
//     public function index(Request $request) 
// {
//         $data = [
//             'msg'=>'これはコントローラから渡されたメッセージです。',
//             'id'=>$request->id
//         ];
//         return view('hello.index', $data);
// }
// };


// page.68 blade
// class HelloController extends Controller
// {
//     public function index() 
// {
//         $data = [
//             'msg'=>'これはBladeを利用したサンプルです。',
//         ];
//         return view('hello.index', $data);
// }
// };


// page.69
// class HelloController extends Controller
// {
//     public function index() 
//     {
//         $data = [
//             'msg'=>'お名前を入力してください。',
//         ];
//         return view('hello.index', $data);
//     }
//     public function post(Request $request) 
//     {
//         $msg = $request->msg;
//         $data = [
//             'msg'=>'こんにちは、' . $msg . 'さん！',
//         ];
//         return view('hello.index', $data);
//     }
// };


// page.76 if
// class HelloController extends Controller
// {
//     public function index() 
//     {
//         return view('hello.index', ['msg'=>'']);
//     }
//     public function post(Request $request) 
//     {
//         return view('hello.index', ['msg'=>$request->msg]);
//     }
// };


// paage.77 isset
// class HelloController extends Controller
// {
//     public function index() 
//     {
//         return view('hello.index');
//     }
//     public function post(Request $request) 
//     {
//         return view('hello.index', ['msg'=>$request->msg]);
//     }
// };


// page.80 ループ処理
// class HelloController extends Controller
// {
//     public function index() 
//     {
//         $data = ['one', 'two', 'three', 'four', 'five'];
//         return view('hello.index', ['data'=>$data]);
//     }
// };


// page.97
class HelloController extends Controller
{
    public function index()
    {
        $data = [
            ['name'=>'山田たろう', 'mail'=>'taro@yamada'],
            ['name'=>'田中はなこ', 'mail'=>'hanako@flower'],
            ['name'=>'鈴木さちこ', 'mail'=>'sachiko@happy'],
        ];
        return view('hello.index', ['data'=>$data]);
    }
}