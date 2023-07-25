@extends('layouts.app')

@section('content')
<div class="py-36 w-1/2 bg-gray-200"> 
    <h1 class="text-xl text-center m-4">CRUD POST</h1>
<table class="px-4 mx-auto border-separate border border-black ">
    <thead>
      <tr>
        <th>Author</th>
        <th>Titulo Post</th>
        <th>Category</th>
        <th>Tag</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>

    @forelse ($posts as $post)
    <tbody class="text-center text-lg"> 
      <tr>
        <td>{{$post->author}}
        </td>
        <td><a href="{{route('post.show', $post->id)}}"> {{$post->title}}</a>
        </td>
        <td>{{$post->category}}
        </td>
        <td>{{$post->tag}}
        </td>
        
        <td>
        <div><button class="btn-custom btn-secondary"><a href="{{route ('post.edit', $post->id)}}">EDIT</a>
        </button>
        </div>
        </td>
        <td><form method="POST" action="{{route ('post.destroy', $post->id)}}">
            @csrf
            @method('DELETE')
            <div class="btn-custom btn-primary"><input type="submit" value="DELETE">
              
            </div>
            </form>
        </td>
      </tr>
    </tbody>
        
        @empty
        <p>NO DATA.</p>
    @endforelse
    <tbody>
        <td class=" border-none "><div class="btn-custom btn-third m-1">
            <a href="{{route ('post.create')}}">Crear Nuevo Post</a>
        </div> </td>
    </tbody>
</table>
</div>


@endsection