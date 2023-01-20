@extends('layouts.main')

@section('page-content')
  <div class="card" style="width: 20rem;">
    @if ($comic->thumb)
      <img class="card-img-top" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    @endif
    <div class="card-body">
      <h5 class="card-title">{{ $comic->title }}</h5>
      <p class="card-text">{{ $comic->series }}</p>
      <p class="card-text">{{ $comic->sale_date }}</p>
      <b class="card-text">{{ $comic->price }} €</b>
      <p class="card-text">{{ $comic->description }}</p>

      <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-secondary">Edit</a>

    </div>
  </div>
@endsection
