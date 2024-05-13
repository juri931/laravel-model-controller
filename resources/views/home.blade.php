@extends('layout.main')

@section('content')

<main>
        <h1>Benvenuto nella mia lista di film!</h1>

        <a href="{{route('movies')}}" class="btn btn-primary">Vai alla lista</a>
    </main>

@endsection
