<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        return Note::all();
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|string|max:255',
                'content' => 'nullable|string',
            ],
            [
                'title.required' => 'No se puede dejar el título vacío.',
                'title.max' => 'El título no puede superar los 255 caracteres.',
            ]
        );

        return Note::create($request->all());
    }

    public function show($id)
    {
        return Note::findOrFail($id);
    }

    public function destroy($id)
    {
        $note = Note::findOrFail($id);
        $note->delete();

        return response()->json(['message' => 'Nota eliminada con exito.']);
    }
}
