@extends('layouts.main-layout')

@section('content')

    <h1>FANTA CALCIO</h1>
    <ul>
        @foreach ($players as $player)
            <li>
                <a href="/player/{{ $player -> id }}">
                    [{{ $player -> id }}] {{ $player -> name }} {{ $player -> lastname }} - {{ $player -> number }}
                </a>
            </li>
        @endforeach
    </ul>

@endsection