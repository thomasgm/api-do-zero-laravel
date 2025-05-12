<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BandController extends Controller
{
    public function getAll()
    {
        $bands = $this->getBands();
        return response()->json($bands);
    }

    public function getById($id)
    {
        $bands = $this->getBands();
        $band = collect($bands)->firstWhere('id', $id);

        if ($band) {
            return response()->json($band);
        } else {
            return response()->json(['message' => 'Band not found'], 404);
        }
    }

    public function getBandsByGender($gender_id)
    {
        $bands = $this->getBands();
        $filteredBands = collect($bands)->where('genre', $gender_id);

        if ($filteredBands->isNotEmpty()) {
            return response()->json($filteredBands->values()->all());
        } else {
            return response()->json(['message' => 'No bands found for this genre'], 404);
        }
    }

    protected function getBands()
    {
        return [
            ['id' => 1, 'name' => 'Band 1', 'genre' => 'Rock'],
            ['id' => 2, 'name' => 'Band 2', 'genre' => 'Pop'],
            ['id' => 3, 'name' => 'Band 3', 'genre' => 'Jazz'],
            ['id' => 4, 'name' => 'Band 4', 'genre' => 'Jazz'],
        ];
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'genre' => 'required|string|min:3|max:255',
        ]);

        // Create a new band
        $band = [
            'id' => count($this->getBands()) + 1,
            'name' => $validatedData['name'],
            'genre' => $validatedData['genre'],
        ];

        // Here you would typically save the band to a database

        return response()->json($band, 201);
    }
}
