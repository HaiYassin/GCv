<?php

namespace App\Http\Controllers;

use App\Models\Curriculam;
use Illuminate\Http\Request;
use Inertia\Response;

class CurriculamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return inertia(
            'Curriculam/Index', [
                'curriculams' => Curriculam::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return inertia('Curriculam/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Curriculam $curriculam): Response
    {
        return inertia(
            'Curriculam/Show', [
                'curriculam' => $curriculam
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
