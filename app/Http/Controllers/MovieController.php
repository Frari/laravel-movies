<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;

class MovieController extends Controller
{

    public function index()
    {
      $movies = Movie::all();
      $data = [
        'movies' => $movies
      ];
      return view('movies.index', $data);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Movie $movie)
    {
        //
    }


    public function edit(Movie $movie)
    {
        //
    }


    public function update(Request $request, Movie $movie)
    {
        //
    }


    public function destroy(Movie $movie)
    {
        //
    }
}
