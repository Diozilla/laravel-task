@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1 class="text-center">show {{$user->name}} Information </h1>
        <form>
            <div class="mb-3">
                <input type="text" class="form-control" value="{{$user->name}}" readonly>
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" value="{{$user->email}}" readonly>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
