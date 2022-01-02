@extends("layouts.app")

@section("content")
    <h1><a href="{{route('posts.edit', $post->id)}}">{{$post->name}}</a></h1>
    <hr>
    <div class="image-container">
        <img height="500" src="{{$post->path}}" alt="">
    </div>
@stop