@extends('layouts.general')

@section('title', 'movies')

@section('content')
    <div class="card-container d-flex flex-wrap justify-content-between">
        @foreach($movies as $movie)
            <a href="{{ route('movie', ['id' => $movie['id']] ) }}" class="card">
                <div class=" text-center w-100">
                    <div class="card-head overflow-hidden w-100">
                        <h2>{{$movie['title']}}</h2>
                    </div>
                    <div class="card-body">
                        <div class="img-container h-100 w-100">
                            <img src="{{ $movie['image']}}" class="h-100 w-100" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection

@section('style')
    <style>
        .card-container{
            max-width: 900px;
            margin: 0 auto;
        }
        .card{
            width: 250px;
            display: block;
             
        }
        .card-body{
            height:400px;
        }
    </style>
@endsection