@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">
                    {{ $testo }}
                </h1>
                <ul>
                    @foreach ($movies as $movie)
                        <li>
                            <p>
                                <strong>{{ $movie->title }}</strong>
                            </p>
                            <p>Data: {{ $movie->date }}</p>
                            <p>Voto: {{ $movie->vote }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
