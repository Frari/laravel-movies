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
      $genres = Genre::all();
      return view ('movies.create', compact('genres'));
    }


    public function store(Request $request)
    {
      $validatedData = $request->validate([
        'title' => 'required|max:255',
        'release' => 'required|numeric|between:1900,2019',
      ]);

      $dati = $request->all();
      $nuovo_film = new Movie();
      $nuovo_film->fill($dati);
      $nuovo_film->save();

      return redirect()->route('movies.index');
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
