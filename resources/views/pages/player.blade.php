@extends('layouts.main-layout')

@section('content')
    
    <h1>PLAYER: {{ $player -> name }} {{ $player -> lastname }}</h1>
    <div>
        <h3>Number: {{ $player -> number }}</h3>
        <h3>Market value: {{ $player -> market_value }}$</h3>
    </div>

@endsection