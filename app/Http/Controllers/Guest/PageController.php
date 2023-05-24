<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        $movies = Movie::take(9)->get();
        return view('movies.index', ['movies' =>$movies]);
    }

    public function show($id){
        $movie = Movie::findOrFail($id);
        return view('movies.show', ['movie' =>$movie]);
    }
}
