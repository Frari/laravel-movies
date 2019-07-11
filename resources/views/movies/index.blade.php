@extends('layouts.app')

@section('content')
  <div class="container mt-5">
    @foreach ($movies as $movie)
      <li>Titolo: {{$movie->title}} - Anno: {{$movie->release}} - Genere:
        {{$movie->genre ? $movie->genre->name : 'a.n.'}}
      </li>
    @endforeach
  </div>

@endsection
