@extends('layouts.main')

@section('page-content')
  @foreach ($comics as $comic)
    <div class="card" style="width: 18rem;">
      @if ($comic->thumb)
        <img class="card-img-top" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
      @endif
      <div class="card-body">
        <h5 class="card-title">{{ $comic->title }}</h5>
        <p class="card-text">{{ $comic->series }}</p>
        <p class="card-text">{{ $comic->sale_date }}</p>
        <b class="card-text">{{ $comic->price }} €</b>

        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Info</a>
        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-secondary">Edit</a>

        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">

          @csrf
          @method('DELETE')

          <button type="submit" class="btn btn-danger">Delete</button>

        </form>

      </div>
    </div>
  @endforeach
@endsection
