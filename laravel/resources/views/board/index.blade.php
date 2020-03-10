@extends('layouts.helloapp')

@section('title', 'Board.index')

@section('menubar')
    @parent
    ボード・ページ
@endsection

@section('content')
    <table>
    <tr><th>Data</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->person_id}}</td>
        </tr>
    @endforeach
    </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection