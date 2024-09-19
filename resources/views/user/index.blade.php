@extends('layouts.app')
@section('title', 'User')
@section('content')

<div class="container d-flex justify-content-center mt-5">
    <div class="card mb-3 p-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4 text-center">
                <img src="{{ asset('storage/image/' . $user->profile_picture) }}" class="img-fluid rounded-circle" alt="Profile Picture" style="width: 120px; height: 120px;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name }}</h5>
                    <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
                    <p class="card-text"><strong>Bio:</strong> <small class="text-muted">{{ $user->bio }}</small></p>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-success btn-lg">Edit Profile</a>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        @foreach($posts->sortByDesc('created_at') as $post)
            <div class="card m-3 " style="max-width: 600px">
                @if($post->image)
                    <img style="max-width: 500px;" src="{{ asset('storage/image/' . $post->image) }}" class="card-img-top mx-auto my-auto" alt="Post Image">
                @endif
                <div class="card-header" style="background-color: rgb(248, 241, 228)">
                    <h5 class="card-title">{{ $post->user->name }}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text"><small class="text-muted">Deskripsi:</small></p>
                  <p class="card-text">{{ $post->content }}</p>
                </div>
                <div class="mt-2 mb-3 d-flex ">
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Update</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mx-3" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
