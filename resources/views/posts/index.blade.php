@extends('layouts.app')

@section('title', 'posts')
    

    @section('content')
    <div class="container">
        <h1 class="my-4">posts</h1>
        <div class="row">
            @forelse ($posts as $post)
             <div class="col-md-4 mb-4">
            <div class="card">
                @if($post->image)
                <img src="{{asset('images/'. $post->image)}}" alt="Post Image" class="card-img-top">
                @endif
                <div class="card-body">
                    <h5 class="card-title" >{{$post->title}}</h5>
                    <p class="card-text">{{$post->description}}</p>
                    <div class="mt-2">
                        <a href="{{route('posts.show',$post->id)}}"  class="btn btn-primary" >view</a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">edit</a>
                        <form action="{{route  ('posts.destroy',$post->id)}}"method="POST" 
                            style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit  " class="btn btn-danger btn-sm">
                        delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>   
    @empty
     <h1>no posts</h1>
     @endforelse
        </div>
    </div>
    @endsection 