@extends('layout')

@section('content')
    <div class="row my-5">
        @foreach ($posts as $post)
            <div class="col-md-4">
                <div class="card m-3" style="width: 18rem;">
                    <img class="card-img-top" src="{{ $post->image }}" alt="Post image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
