@extends('layouts.app')

@section('content')
  <div class="container mt-5">
    <h1>Tutti i film</h1>
    <a href="{{route('movies.create')}}" class="btn btn-primary mb-3">Inserisci nuovo film</a>
    @foreach ($movies as $movie)
      <li>Titolo: {{$movie->title}} - Anno: {{$movie->release}} - Genere:
        {{$movie->genre ? $movie->genre->name : 'a.n.'}}
      </li>
    @endforeach
  </div>

@endsection
