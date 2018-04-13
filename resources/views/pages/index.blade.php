@extends('layouts.default')

@section('content')
    <h1>Main page</h1>
    @foreach( $slides as $slide )
        <img src="/uploads/slides/large/{{$slide->image}}" alt="">
    @endforeach
@stop