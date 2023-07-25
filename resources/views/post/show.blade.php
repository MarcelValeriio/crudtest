@extends('layouts.app')

@section('content')

<h1>{{$post->title}}</h1>
<h3>{{$post->author}}</h3>
<p>{{$post->description}}</p>
<p>{{$post->tag}}</p>
<a href="{{route('post.index')}}">BACK</a>
@endsection