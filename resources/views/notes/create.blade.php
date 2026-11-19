@extends('layouts.app')

@section('content')
    <form action="{{ route('notes.store') }}" method="POST" class="note-card">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
            @error('title') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" rows="5">{{ old('content') }}</textarea>
            @error('content') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div>
            <button type="submit" class="btn">Save Note</button>
            <a href="{{ route('notes.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
@endsection