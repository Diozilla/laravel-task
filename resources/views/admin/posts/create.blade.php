@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1 class="text-center">Create post </h1>
        <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="title" name="title">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a description here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2" name="desc">Description</label>
                  </div>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control @error('author') is-invalid @enderror" placeholder="author" name="author">
                @error('author')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="file" class="form-control" name="image">
            </div>
            
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
