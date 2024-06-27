@extends('template')

@section('content')
    <h1>Listado del Blog</h1>
    @foreach ($post as $post)
        <p>
            <strong>
                {{ $post['id'] }}
            </strong>
            <a href="{{route('post',$post['slug'])}}">
                {{ $post['title'] }}
            </a>
        </p>
    @endforeach
@endsection
