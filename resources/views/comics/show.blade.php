@extends('layouts.app')

@section('content')
    <a href="{{ route('comics.index') }}" class="btn btn-primary">Back to Comics List</a>
    <div class="container my-5">
        <h1>{{ $comic->title }}</h1>
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
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
