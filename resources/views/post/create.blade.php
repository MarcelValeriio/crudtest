@extends('layouts.app')

@section('content')

<section>
    <div  class="py-36 bg-gray-200 flex">
        <div class="w-full mx-4 bg-slate-50 px-10 py-5 rounded-lg">
            <div class="w-full pl-2 pr-2 mb-4 mt-4">
            <h2 class="text-3xl font-bold text-center">Crear Post Nuevo</h2>
            </div>
            <div class="container ml-auto mr-auto flex items-center justify-center">
            <div class="w-full md:w-1/2">    
                <form class="mt-10 px-8 pt-6 pb-8 mb-4" method="POST" action="{{route('post.store')}}">
                @csrf
                <div class="mb-4">
                <div class="grid grid-flow-row sm:grid-flow-col gap-3">
                    <div class="sm:col-span-4 justify-center">
                    <label label class="block text-gray-700 text-sm font-bold mb-2" for="">Author:</label>
                    <input class="" type="text" name="author">
    
                    @error('author')
                    <p style="color: red;">{{ $message }}</p>
                    @enderror
                    </div>
                
            <div class="sm:col-span-4 justify-center">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="">Title:</label>
            <input class="" type="text" name="title" id="">
    
            @error('title')
                <p style="color: red;">{{ $message }}</p>
            @enderror
            </div>
        </div>
            <div>
            <label for="">Description:</label>
            <input class="" type="text" name="description">
    
            @error('description')
                <p style="color: red;">{{ $message }}</p>
            @enderror
            </div>
            <div>
            <label for="">Category:</label>
            <input class="" type="text" name="category">
            @error('category')
            <p style="color: red;">{{ $message }}</p>
            @enderror
            </div>
            <div>
            <label for="">Tag:</label>
            <input class="" type="text" name="tag">
            @error('tag')
            <p style="color: red;">{{ $message }}</p>
            @enderror
            </div>
            <div class="btn-custom btn-third m-3">
                <input type="submit" value="Create"> 
            </div>
            <div class="btn-custom btn-secondary">
                <a href="{{route ('post.index')}}">Volver</a>
            </div>
                </div>
            </form>
            </div>
            </div>
        </div>
    </div>
</section>

 
<!--<main>
 
    <div class="container ml-auto mr-auto flex flex-wrap items-start mt-8">
      <div class="w-full pl-2 pr-2 mb-4 mt-4">
        <h1 class="text-3xl font-extrabold text-center"> Como Crear un Formulario con Tailwind CSS (Responsive) </h1>
      </div>
    </div>
    <div class="container ml-auto mr-auto flex items-center justify-center">
      <div class="w-full md:w-1/2"> -->
   
        <!-- Formulario -->
        <!--<form class="bg-white px-8 pt-6 pb-8 mb-4">
          <div class="mb-4">
            <div class="grid grid-flow-row sm:grid-flow-col gap-3">
              <div class="sm:col-span-4 justify-center">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nya"> Nombres y Apellidos </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nya" type="text" placeholder="Carlos Torres" required>
              </div>
              <div class="sm:col-span-4 justify-center">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email"> Email </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="ctorres@mail.com" required>
              </div>
            </div>
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="asunto"> Asunto </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="asunto" type="text" placeholder="Venta de Productos" required>
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="mensaje"> Mensaje </label>
            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="mensaje" rows="5" placeholder="El mensaje" required></textarea>
          </div>
          <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit"> Aceptar </button>
          </div>
        </form>
   
      </div>
    </div>
   
  </main> -->
@endsection