@extends('layouts.base')

@section('pageTitle')
	{{$movie->title}}
@endsection

@section('content')
    <a href="{{route('movies.index')}}">Torna all'home page</a>
	<h2>{{$movie->year}}</h2>
    <h3>{{$movie->genres}}</h3>
	<p>{{$movie->plot}}</p>
@endsection