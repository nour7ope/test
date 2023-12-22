@extends('layouts.app')

@section('title', "edit post")

@section('content')
    <div class="card" >
        <div class="card-body" >
            <h2 class="card-title">Edit Post</h2>
            <form action="{{route('posts.update', $post->id)}}" method="post" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <div class="from-group" >
                <label for="title">title:</label>
                <input type="text" name="title"  value="{{$post->title}}" required  class="form-control" >
            </div>
            <div class="from-group">
                <label for="dscription">Description:</label>
                <textarea class="form-control"  name="description" required>{{$post->content}}</textarea>
            </div>
            <div class="from-group">
                <label for="image">Image</label>
                <input type="file" class="from-control-file" name="image">
                @if($post->image)
                <img src="{{asset('images/' . $post->image)}}" alt="Current Post Image">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">update post</button>
            <a href="{{route('posts.index')}}" class="btn btn-secondary" >cancel</a>
            </form>
        </div>
    </div>
    @endsection