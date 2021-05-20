@extends('layouts.default')

@section('title')
Blog Posts
@endsection

@section('content')
<h1>
  <a href="{{ url('/posts/create') }}" class="header-menu">New Post</a>
</h1>
    <ul>
    @forelse($posts as $post)
      <li>
        <a href="{{ action('PostsController@show', $post)}}">{{ $post->title }}</a>
        <a href="{{ action('PostsController@edit', $post)}}" class="edit">[ Edit ]</a>
        <a href="#" class="del" data-id="{{ $post->id }}">[ x ]</a>
      </li>
      <form method="post" action="{{ url('/posts', $post->id) }}" id="form_{{ $post->id }}">
        {{ csrf_field() }}
        {{ method_filed('delete') }}

    　</form>
    @empty
      <li>No posts yet</li>
    @endforelse
    </ul>
    <script src="/js/main.js"></script>
@endsection



