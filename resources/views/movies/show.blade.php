@extends('layouts.general')

@section('title', 'movie')

@section('content')
    <h3>{{$movie['title'] }}</h3>
    <ul>
        <li>{{$movie['original_title']}}</li>
        <li>{{$movie['date']}}</li>
        <li>{{$movie['nationality']}}</li>
        <li>{{$movie['vote']}}</li>

    </ul>
@endsection

@section('style')
    <style>
       
    </style>
@endsection

