@extends('layouts.app')

@section('content')
    <div class="events-index">
        <h1>Event Management System</h1>
        <a href="{{ route('events.create') }}" class="btn btn-primary">Create Event</a>
    </div>
    <div class="events-table p-4">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Venue</th>
                    <th>Location</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                    <tr>
                        <td>{{ $event->name }}</td>
                        <td>{{ $event->date }}</td>
                        <td>{{ $event->venue }}</td>
                        <td>{{ $event->location }}</td>
                        <td>
                            <a href="{{ route('events.show', $event->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
