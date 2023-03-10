@extends('layouts.main')

@section('page-content')
  <h1>Modify Comic</h1>

  <form action="{{ route('comics.update', $comic->id) }}" method="POST">

    @csrf

    @method('PUT')

    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control @error('title') alert alert-danger @enderror"
        value="{{ $comic->title }}" id="title" name="title" maxlength="50" required>
    </div>

    <div class="mb-3">
      <label for="series" class="form-label">Series</label>
      <input type="text" class="form-control @error('series') alert alert-danger @enderror"
        value="{{ $comic->series }}" id="series" name="series" required>
    </div>

    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="float" class="form-control @error('price') alert alert-danger @enderror"
        value="{{ $comic->price }}" id="price" name="price" required>
    </div>

    <div class="mb-3">
      <label for="sale_date" class="form-label">Sale Date</label>
      <input type="date" class="form-control @error('sale_date') alert alert-danger @enderror"
        value="{{ $comic->sale_date }}" id="sale_date" name="sale_date" required>
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control @error('description') alert alert-danger @endif" id="description"
        name="description" rows="3">{{ $comic->description }}"</textarea>
    </div>

    <div class="mb-3">
      <label for="type" class="form-label">Type</label>
      <input type="text" class="form-control" value="{{ $comic->type }}" id="type"
        name="type">
    </div>

    <div class="mb-3">
      <label for="thumb" class="form-label">Thumbnail</label>
      <input type="text" class="form-control" value="{{ $comic->thumb }}" id="thumb"
        name="thumb">
    </div>

    <button type="submit" class="btn btn-primary">Salva</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
  </form>
@endsection
