@extends('layouts.app')

@section('content')
<div class="container my-5 p-4" style="background-color: #f4e1ff; border-radius: 8px;">
    <h1 class="text-center" style="color: #6a0dad; font-size: 2.5rem; font-weight: bold;">Movies</h1>

    <a href="{{ route('movies.create') }}" class="btn btn-primary mb-3" style="background-color: #6a0dad; border: none; font-size: 1.2rem;">
        Add New Movie
    </a>

    <table class="table table-bordered table-hover" style="font-size: 1.2rem; background-color: #fdf2ff;">
        <thead class="text-white" style="background-color: #6a0dad;">
            <tr>
                <th>Title</th>
                <th>Genre</th>
                <th>Director</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->genre }}</td>
                    <td>{{ $movie->director }}</td>
                    <td>
                        <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-sm btn-warning" style="font-size: 1rem;">Edit</a>
                        <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" style="font-size: 1rem;">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
