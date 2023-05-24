@extends('layouts.general')

@section('title', 'Home')

@section('content')
    <div class="d-flex flex-column align-items-center p-3">
        <h1 class="text-center p-3">Welcome to my website!</h1>
        <a href="{{ route('movies') }}" class="btn btn-primary">View All Movies</a>
    </div>
@endsection