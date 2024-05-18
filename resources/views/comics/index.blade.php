@extends('layouts.app')

@section('content')
    <a href="{{ route('comics.create') }}" class="btn btn-success">Add Comic</a>
    <div class="container my-5">
        <h1 class="mb-4">Comics List</h1>
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
                            <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $comics->links('pagination::bootstrap-5') }}
    </div>
@endsection
