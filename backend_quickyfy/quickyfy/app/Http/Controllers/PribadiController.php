<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;

class PribadiController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required|unique:personals',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'nationality' => 'required',
            'gender' => 'required',
            'religion' => 'required',
        ]);

        $personal = Personal::create($validatedData);

        return response()->json(['message' => 'Personal data created successfully', 'data' => $personal]);
    }
}
