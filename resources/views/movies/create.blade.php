@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Inserimento nuovo film</h1>
{{-- validayione campi form --}}
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif

    <form action="{{route('movies.store')}}" method="post">
      @csrf
      <div class="form-group">
        <label for="title">Titolo: </label>
        <input class="form-control" type="text" name="title" placeholder="titolo film" value="{{old('title')}}">
      </div>
      <div class="form-group">
        <label for="plot">Trama: </label>
        <textarea class="form-control" name="plot" rows="8" cols="80" placeholder="trama film">{{old('plot')}}</textarea>
      </div>
      <div class="form-group">
        <label for="release">Anno d'uscita: </label>
        <input class="form-control" type="number" name="release" value="{{old('release')}}"  min="1900" max="2019">
      </div>
      <div class="form-group">
        <select class="form-control" name="genre_id">
          <option value="">Seleziona genere film</option>
          @foreach ($genres as $genre)
            <option value="{{$genre->id}}">{{$genre->name}}</option>
          @endforeach
        </select>
      </div>
      <input type="submit" value="Crea film" class="btn btn-primary">
    </form>
  </div>
@endsection
