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
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
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
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $comics->links('pagination::bootstrap-5') }}
    </div>
@endsection
