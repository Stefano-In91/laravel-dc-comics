@extends('layouts.main')

@section('page-content')
  <div class="card" style="width: 18rem;">
    @if ($comic->thumb)
      <img class="card-img-top" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    @endif
    <div class="card-body">
      <h5 class="card-title">{{ $comic->title }}</h5>
      <p class="card-text">{{ $comic->series }}</p>
      <p class="card-text">{{ $comic->sale_date }}</p>
      <b class="card-text">{{ $comic->price }}</b>

      <a href="#" class="btn btn-primary">Info</a>
    </div>
  </div>
@endsection
