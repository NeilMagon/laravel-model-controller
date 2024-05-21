@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-4">
            @foreach ($movies as $movie)
                <div class="col text-center">
                    <h3>{{ $movie->title}}</h3>
                    <h5>{{ $movie->original_title}}</h5>
                    <h6>{{ $movie->nationality}}</h6>
                    <p>{{ $movie->date}}</p>
                    <p>{{ $movie->vote}}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection