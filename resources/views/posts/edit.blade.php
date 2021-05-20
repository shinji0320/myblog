@extends('layouts.default')

@section('title', 'Edit Post')


@section('content')
  <h1>
    <a href="{{ url('/') }}" class="header-menu">back</a>
    Edit Post
  </h1>
  <form method="post" action="{{ url('/posts', $post->id) }}">
    {{ csrf_field() }}
    {{ method_field('patch') }}


    <p>
      <input type="text" name="title" placeholder="enter title" value="{{ old('titile', $post->title) }}">
      @if ($errors->has('title'))
        <span class="error">{{ $errors->first('title') }}</span>
      @endif
    </p>
      <textarea name="body" placeholder="enter body" value="{{ old('body', $post->body) }}"></textarea>
    <p>
      @if ($errors->has('body'))
        <span class="error">{{ $errors->first('body') }}</span>
      @endif
    </p>
    <p>
      <input type="submit" value="Update">
    </p>
  </form>
@endsection






