<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    // show all notes
    public function index()
    {
        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }

    // show the form for creating a new note
    public function create()
    {
        return view('notes.create');                                                                
    }

    // store a newly created note in the database
    public function store(Request $request)
    {
        $note = Note::create($request->only(['title', 'content']));
        return redirect()->route('notes.index');
    }

    // show form for editing a note
    public function show(Note $note)
    {
        return view('notes.show', compact('note'));
    }

    // show form for editing a note
    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }
//save the updated note to the database
    public function update(Request $request, Note $note)
    {
        $note->update($request->only(['title', 'content']));
        return redirect()->route('notes.index');
    }

//    delete a note from the database
    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('notes.index');
    }
}
