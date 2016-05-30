@extends('layout')

@section('body')
    <h1>cards list</h1>
    @foreach ($cards as $card)
        <div>
            {{ $card->id }} - {{ $card->title }} ({{ $card->updated_at }})
        </div>
    @endforeach
@stop
