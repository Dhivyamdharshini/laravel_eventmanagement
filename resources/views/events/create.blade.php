@extends('layouts.app')

@section('content')
    <div class="event-create card p-4">
        <h2>Create Event</h2>
        <form action="{{ route('events.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Event Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Date</label>
                <input type="date" name="date" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Venue</label>
                <input type="text" name="venue" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Location</label>
                <input type="text" name="location" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success btn-custom">Create</button>
            <a href="{{ route('events.index') }}" class="btn btn-secondary btn-custom">Back</a>
        </form>
    </div>
@endsection
