@extends('layout')


@section('section-header')
Hello Page
@stop


@section('section-content')
<p>The quick brown fox jumps over the lazy dog</p>
    {{$variable}}
    <br>
    {{$blog->title}}
    <br>

    @foreach ($array as $item)
        {{$item}}
    @endforeach

@stop

@section('section-footer')
<p>This is the footer</p>
@stop
