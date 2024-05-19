@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="content-title oswald">
            <h2>{{ $comic->title }}</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ $comic->thumb }}" class="img-fluid" alt="{{ $comic->title }}">
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Description</h5>
                        <p class="card-text">{{ $comic->description }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Price:</strong> {{ $comic->price }}</li>
                        <li class="list-group-item"><strong>Series:</strong> {{ $comic->series }}</li>
                        <li class="list-group-item"><strong>Sale Date:</strong> {{ $comic->sale_date }}</li>
                        <li class="list-group-item"><strong>Type:</strong> {{ $comic->type }}</li>
                        <li><a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning m-4">Edit Comic</a></li>
                    </ul>
                </div>
                <a href="{{ route('comics.index') }}" class="btn btn-secondary mt-5">Back to Comics List</a>
            </div>
        </div>
    </div>
@endsection
