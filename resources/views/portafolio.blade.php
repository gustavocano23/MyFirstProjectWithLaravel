@extends('plantilla')

@section('title', "Portafolio")


@section('content')
    <h1>Portafolio</h1>

    <ul>
        @forelse ($portafolio as $portafolioItem)
            <li>{{ $portafolioItem['title']}}</li>

        @empty
            <li>No hay nada que mostrar</li>

        @endforelse
    </ul>
@endsection
