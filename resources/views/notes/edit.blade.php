@extends('layouts.app')

@section('content')
    <form action="{{ route('notes.update', $note) }}" method="POST" class="note-card">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $note->title) }}">
            @error('title') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" rows="5">{{ old('content', $note->content) }}</textarea>
            @error('content') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div>
            <button type="submit" class="btn">Update Note</button>
            <a href="{{ route('notes.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
@endsection