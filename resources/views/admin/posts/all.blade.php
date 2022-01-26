@extends('layouts.admin')
@section('content')
    <h1 class="text-center">All Posts </h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">image</th>
                    <th scope="col">title</th>
                    <th scope="col">author</th>
                    <th scope="col">created_at</th>
                    <th scope="col">control</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">1</th>
                        <td><img src="{{URL::asset('img/')}}/{{ $post->image }}" height="50vh"></td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->author }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td class="d-flex">
                          <a href="{{route('posts.show' , $post->id)}}" class="btn btn-info">show</a>
                          <a href="{{route('posts.edit' , $post->id)}}" class="btn btn-warning">edit</a>
                          {{-- <a href="" class="btn btn-danger">delete</a> --}}
                          <form method="post" action="{{route('posts.destroy' , $post->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">
                          </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{route('posts.create')}}" class="btn btn-primary">add post</a>
    </div>
@endsection
