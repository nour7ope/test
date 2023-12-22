@extends('layouts.app')

@section('title' , $post->title)

@section('content')
<div class="card" >
    <div class="card-body" >
        <h2 class="card-title" >{{$post->title}}</h2>
        <p>{{ $post->description}}</p>
        @if($post->image)
        <img src="{{ asset('images/'. $post->image)}}" alt="Post Image" class="img-fluid">

        @endif
        <div class="mt-2">
            <a href="{{route ('posts.index')}}" class="btn btn-secondary" >back</a>
        </div>
    </div>
</div>
@endsection