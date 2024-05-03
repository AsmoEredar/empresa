<?php

namespace App\Http\Controllers;

use App\Models\Manu;
use Illuminate\Http\Request;

class ManuController extends Controller
{
    
    public function index()
    {
        return view('manu.index',['manus'=> Manu::all()]);
    }

    public function create()
    {
        //
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
    public function show(Manu $manu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manu $manu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Manu $manu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manu $manu)
    {
        //
    }
}

