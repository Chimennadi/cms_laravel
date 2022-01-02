@extends("layouts.app")

@section("content")
    <h1>Blog Post</h1>
    <ul class="list-group">
    @foreach($posts as $post)
        <hr>
        <div class="image-container">
        <a href="{{route('posts.show', $post->id)}}"><img height="100" src="{{$post->path}}" alt=""></a>
        </div>
        <li class="list-group-item"><a href="{{route('posts.show', $post->id)}}">{{$post->name}}</a></li>
    @endforeach
    </ul>
@stop