<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index()
    {
        $evento = Evento::all();
        return view('evento.index', compact('evento'));
    }

    public function create()
    {
        return view('evento.create');
    }

    public function store(Request $request)
    {
        Evento::create($request->all());
        return redirect('evento')->with('success', 'Evento created successfully.');
    }

    public function edit($id)
    {
        $evento = Evento::findOrFail($id);
        return view('evento.edit', compact('evento'));
    }

    public function update(Request $request, $id)
    {
        $evento = Evento::findOrFail($id);
        $evento->update($request->all());
        return redirect('evento')->with('success', 'Evento updated successfully.');
    }

    public function destroy($id)
    {
        $evento = Evento::findOrFail($id);
        $evento->delete();
        return redirect('evento')->with('success', 'Evento deleted successfully.');
    }



}
