@extends('layout.main')

@section('content')
    <div class="container">
        <h1>I miei film</h1>
        @foreach ($movies as $movie)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
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
