@extends('layouts.default')

@section('title', 'New Post')


@section('content')
  <h1>
    <a href="{{ url('/post') }}" class="header-menu">back</a>
    New Post
  </h1>
  <form method="post" action="{{ url('/posts/') }}">
    {{ csrf_field() }}


    <p>
      <input type="text" name="title" placeholder="enter title">
    </p>
    <p>
      <textarea name="body" placeholder="enter body"></textarea>
    </p>
    <p>
      <input type="submit" value="Add">
    </p>
  </form>
@endsection






