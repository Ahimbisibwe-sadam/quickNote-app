@extends('layouts.app')

@section('content')
    @if($notes->isEmpty())
        <p>No notes yet. Click "+ New Note" to write your first one!</p>
    @else
        <div class="notes-grid">
            @foreach($notes as $note)
                <div class="note-card">
                    <div>
                        <h3>{{ $note->title }}</h3>
                        <p>{{ $note->content }}</p>
                    </div>
                    <div class="card-actions">
                        <a href="{{ route('notes.edit', $note) }}" class="btn btn-secondary">Edit</a>
                        
                        <form action="{{ route('notes.destroy', $note) }}" method="POST" onsubmit="return confirm('Delete this note?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection