<?php

namespace App\Http\Controllers;
use App\Models\Tec;
use Illuminate\Http\Request;

class TecController extends Controller
{
 
    public function index()
    {
       return view('tec.index',['tecs'=> Tec::all()]);
    }

    
    public function create()
    {
       
    }

    
    public function store(Request $request)
    {
       
    }

    
    public function show(Tec $tec)
    {
        
    }

    
    public function edit(Tec $tec)
    {
        
    }

    
    public function update(Request $request, Tec $tec)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tec $tec)
    {
        //
    }
}

