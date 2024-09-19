@extends('layouts.app')
@section('title', 'Buat Postingan')
@section('content')

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header text-center bg-secondary text-white">
            <h5>Buat Postingan</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Deskripsi</label>
                    <textarea name="content" id="content" class="form-control" rows="4" required></textarea>
                </div>

                <button type="submit" class="btn btn-success">Post</button>
            </form>
        </div>
    </div>
</div>

@endsection
