@extends('layouts.app')

@section('content')
    <div class="event-show card p-4">
        <h2>{{ $event->name }}</h2>
        <p><strong>Description:</strong> {{ $event->description }}</p>
        <p><strong>Date:</strong> {{ $event->date }}</p>
        <p><strong>Venue:</strong> {{ $event->venue }}</p>
        <p><strong>Location:</strong> {{ $event->location }}</p>
        <a href="{{ route('events.index') }}" class="btn btn-secondary btn-custom">Back</a>
    </div>
@endsection
