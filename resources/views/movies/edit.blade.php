@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">{{ isset($movie) ? 'Edit Movie' : 'Add Movie' }}</h1>
    <form method="POST" action="{{ isset($movie) ? route('movies.update', $movie) : route('movies.store') }}" class="p-4 bg-white shadow rounded">
        @csrf
        @if (isset($movie))
            @method('PUT')
        @endif
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $movie->title ?? '' }}">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" name="genre" class="form-control" value="{{ $movie->genre ?? '' }}">
        </div>
        <div class="mb-3">
            <label for="director" class="form-label">Director</label>
            <input type="text" name="director" class="form-control" value="{{ $movie->director ?? '' }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control">{{ $movie->description ?? '' }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
