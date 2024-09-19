@extends('layouts.app')
@section('title','Beranda')
@section('content')

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

                <div class="card-footer">
                    <a href="{{route('comments.show',$post->id)}}">Komentar</a> <br>
                    @foreach($post->comments as $comment)
                    <strong>{{ $comment->user->name }}</strong>
                    <p>{{ $comment->content }}</p>
                    <p>{{$comment->hashtag}}</p>
                    <img src="{{ asset('storage/image/' . $comment->image) }}" alt="" class="img-fluid">
                    @if(Auth::user()->id == $comment->id_user)
                    <a href="{{route('comments.edit', $comment->id)}}" class="btn btn-sm btn-primary mt-3">Edit</a>
                    <a href="{{ route('comments.destroy', $comment->id) }}" class="btn btn-danger btn-sm mt-3" data-confirm-delete="true">Delete</a>
                    @endif
                    <hr>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection
