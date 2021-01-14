<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::orderby("year", "asc")->get();
        return view("movie_list", ["movies" => $movies]);
    }

    public function getMovie(Movie $movie){
        return view("movie_show", ["movie" => $movie]);
    }
}
