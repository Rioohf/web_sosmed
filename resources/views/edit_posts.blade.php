@extends('layouts.app')
@section('title', 'Update Post')
@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center bg-secondary text-white">
            <h4>Update Post</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group mb-4">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" id="image" class="form-control mb-2">
                    @if($post->image)
                        <img src="{{ asset('storage/image/' . $post->image) }}" alt="Post Image" class="img-fluid" style="max-width: 100px;">
                    @endif
                </div>

                <div class="form-group mb-4">
                    <label for="content" class="form-label">Content</label>
                    <textarea name="content" id="content" class="form-control" rows="5" required>{{ old('content', $post->content) }}</textarea>
                </div>


                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-lg">Update Post</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
