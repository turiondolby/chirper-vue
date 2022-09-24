<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Chirp;
use Inertia\Response;
use Illuminate\Http\Request;

class ChirpsController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Chirps/Index', [
            //
        ]);
    }

    public function create() {}

    public function store(Request $request)
    {
        $validated = $request->validate([
            'message' => ['required', 'string', 'max:255']
        ]);

        $request->user()->chirps()->create($validated);

        return redirect()->route('chirps.index');
    }

    public function show(Chirp $chirp) {}

    public function edit(Chirp $chirp) {}

    public function update(Request $request, Chirp $chirp) {}

    public function destroy(Chirp $chirp) {}
}
