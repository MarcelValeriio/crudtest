@extends('layouts.app')

@section('content')
<section class="py-36 w-1/2 bg-gray-200 flex">
    <div class="w-full mx-4 bg-slate-50 px-10 py-5 rounded-lg">
        <h2 class="text-center font-bold text-4x1">Editar Post</h2>

        <form method="POST" action="{{route('post.update', $post->id)}}">
            @method('PUT')
            @csrf
    <div>
    <label for="">Author:</label>
    <input class="" type="text" name="author" value="{{$post->author}}">
    
    @error('author')
    <p style="color: red;">{{ $message }}</p>
    @enderror
    </div>
    <div>
    <label for="">Title:</label>
    <input class="" type="text" name="title" value="{{$post->title}}" id="">
    
    @error('title')
        <p style="color: red;">{{ $message }}</p>
    @enderror
    </div>
    <div>
    <label for="">Description:</label>
    <input class="" type="text" name="description" value="{{$post->description}}">
    
    @error('description')
        <p style="color: red;">{{ $message }}</p>
    @enderror
    </div>
    <div>
    <label for="">Category:</label>
    <input class="" type="text" name="category" value="{{$post->category}}">
    @error('category')
        <p style="color: red;">{{ $message }}</p>
    @enderror
    </div>
    <div>
    <label for="">Tag:</label>
    <input class="" type="text" name="tag" value="{{$post->tag}}">
    @error('tag')
    <p style="color: red;">{{ $message }}</p>
    @enderror
    </div>
    <div class="btn-custom btn-third m-3">
        <input type="submit" value="Editar"> 
    </div>
    <div class="btn-custom btn-secondary">
        <a href="{{route ('post.index')}}">Volver</a>
    </div>
</form>

    </div>

</section>
@endsection

