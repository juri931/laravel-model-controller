@extends('layout.main')

@section('content')
    <h1>I miei film</h1>
    <div class="container">
        @foreach ($movies as $movie)
        <div class="card bg-dark text-white" style="width: 18rem;">
            <img style="background-image: url({{ $movie->image }})" class="card-img">
            <div class="card-img-overlay">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <p class="card-text">Titolo originale: {{ $movie->original_title }}</p>
                <p class="card-text">Nazionalità: {{ $movie->nationality }}</p>
                <p class="card-text">Data uscita: {{ $movie->date }}</p>
                <p class="card-text">Voto: {{ $movie->vote }}</p>
            </div>
        </div>

        @endforeach
    </div>
@endsection
