@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $post->title }}</h2>
                <p>By. <a href="#" class="text-decoration-none">{{ $post->author->username }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                <h5>{{ $post->author->name }}</h5>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->author->name }}">
                
                <article class="my-3">
    
                    {!! $post->body !!}</p>

                </article>

                <a href="/posts" class="text-decoration-none">Back to Posts</a>
            </div>
        </div>
    </div>

@endsection