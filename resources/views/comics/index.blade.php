@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="content-title oswald">
            <h2>Comics</h2>
        </div>
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text"><strong>Price:</strong> {{ $comic->price }}</p>
                            <p class="card-text"><strong>Series:</strong> {{ $comic->series }}</p>
                            <p class="card-text"><strong>Sale Date:</strong> {{ $comic->sale_date }}</p>
                            <p class="card-text"><strong>Type:</strong> {{ $comic->type }}</p>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary px-3">View</a>
                                <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning px-3">Edit</a>
                                <form action="{{ route('comics.destroy', $comic) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger px-3"
                                        onclick="return confirm('Are you sure you want to delete this comic?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $comics->links('pagination::bootstrap-5') }}
    </div>
@endsection
