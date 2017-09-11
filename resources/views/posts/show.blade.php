@extends('layouts.app')

@section('title', '| View Post')

@section('content')

    <div class="container">
        <div class="jumbotron">
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->body }}</p>
        </div>
        {!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id] ]) !!}
        <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
        @can('Edit Post')
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info" role="button">Edit</a>
        @endcan
        @can('Delete Post')
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        @endcan
        {!! Form::close() !!}

    </div>

@endsection
