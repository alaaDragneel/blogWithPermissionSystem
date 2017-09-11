@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Posts</h3></div>
                    <div class="panel-heading">Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</div>
                    <div class="panel-body">
                    @foreach ($posts as $post)
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <div class="caption">
                                        <h3>{{ $post->title }}</h3>
                                        <p>{{ str_limit($post->body, 100) }}</p>
                                        <p>
                                            <a href="{{ route('posts.show', $post->id ) }}" class="btn btn-primary" role="button">Show</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                </div>
                </div>
                <div class="text-center">
                    {!! $posts->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
