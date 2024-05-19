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
                        <li class="list-group-item d-flex justify-content-evenly"><a
                                href="{{ route('comics.edit', $comic) }}" class="btn btn-warning m-4 px-5">Edit Comic</a>

                            <button type="button" class="btn btn-danger m-4 px-5" data-bs-toggle="modal"
                                data-bs-target="#modalId-{{ $comic->id }}">
                                Delete</i>
                            </button>

                            <div class="modal fade" id="modalId-{{ $comic->id }}" tabindex="-1"
                                data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                aria-labelledby="modalTitleId-{{ $comic->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitleId-{{ $comic->id }}">
                                                You are deleting: {{ $comic->title }}
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Attention! You are about to delete this record. The operation is
                                            irreversible!
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            <form action="{{ route('comics.destroy', $comic) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    Confirm
                                                </button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <a href="{{ route('comics.index') }}" class="btn btn-secondary mt-5">Back to Comics List</a>
            </div>
        </div>
    </div>
@endsection
