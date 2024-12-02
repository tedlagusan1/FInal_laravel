@extends('layouts.app')

@section('content')
<div class="container my-5 p-5" style="max-width: 700px; background-color: #f4e1ff; border-radius: 12px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
    <h2 class="text-center" style="color: #6a0dad; font-size: 2.5rem; font-weight: bold; margin-bottom: 20px;">Add Movie</h2>

    <form action="{{ route('movies.store') }}" method="POST" style="font-size: 1.2rem;">
        @csrf
        <div class="mb-4">
            <label for="title" class="form-label" style="font-weight: bold;">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter movie title" style="border-radius: 8px; padding: 10px; border: 1px solid #6a0dad;" required>
        </div>
        <div class="mb-4">
            <label for="genre" class="form-label" style="font-weight: bold;">Genre</label>
            <input type="text" name="genre" class="form-control" id="genre" placeholder="Enter movie genre" style="border-radius: 8px; padding: 10px; border: 1px solid #6a0dad;" required>
        </div>
        <div class="mb-4">
            <label for="director" class="form-label" style="font-weight: bold;">Director</label>
            <input type="text" name="director" class="form-control" id="director" placeholder="Enter director's name" style="border-radius: 8px; padding: 10px; border: 1px solid #6a0dad;" required>
        </div>
        <div class="mb-4">
            <label for="description" class="form-label" style="font-weight: bold;">Description</label>
            <textarea name="description" class="form-control" id="description" rows="4" placeholder="Enter movie description" style="border-radius: 8px; padding: 10px; border: 1px solid #6a0dad;"></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100" style="background-color: #6a0dad; border: none; padding: 12px; font-size: 1.2rem; border-radius: 8px;">Add Movie</button>
    </form>
</div>
@endsection
