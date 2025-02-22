@extends('layouts.app')

@section('content')
    <div class="event-edit card p-4">
        <h2>Edit Event</h2>
        <form action="{{ route('events.update', $event->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Event Name</label>
                <input type="text" name="name" class="form-control" value="{{ $event->name }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" required>{{ $event->description }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Date</label>
                <input type="date" name="date" class="form-control" value="{{ $event->date }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Venue</label>
                <input type="text" name="venue" class="form-control" value="{{ $event->venue }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Location</label>
                <input type="text" name="location" class="form-control" value="{{ $event->location }}" required>
            </div>
            <button type="submit" class="btn btn-warning btn-custom">Update</button>
            <a href="{{ route('events.index') }}" class="btn btn-secondary btn-custom">Back</a>
        </form>
    </div>
@endsection
