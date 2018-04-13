@extends('layouts.default')

@section('content')

    @foreach( $projects as $project )
        @if( $project->id%2 == 0 )
            @include('partials.project_even', ['$project' => $project])
         @else
            @include('partials.project_odd', ['$project' => $project])
         @endif
    @endforeach
@stop