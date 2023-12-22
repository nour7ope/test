@extends('layouts.app')

@section('title', "create post")

@section('content')
<div class="card">
    <div class="card-body">
        <h1 class="card-title" >create post</h1>
        @if($errors->any())

        <div class="alert alert-danger"  >
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
        </div>
        @endif
        <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="from-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" required >
        </div>
        <div class="from-group">
            <label for="description">description</label>
            <textarea class="form-control"  name="description" required></textarea>
        </div>
        <div class="from-group">
            <label for="image">Image</label>
            <input type="file" class="from-control-file" name="image">
        </div>
        <button type="submit" class="btn btn-primary">create Post</button>
        </form>
    </div>
</div>
@endsection    