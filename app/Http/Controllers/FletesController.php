<?php

namespace App\Http\Controllers;

use App\Fletes;
use Illuminate\Http\Request;

class FletesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fletes.index');         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fletes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosFletes=request()->all();

        return response()->json($datosFletes);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fletes  $fletes
     * @return \Illuminate\Http\Response
     */
    public function show(Fletes $fletes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fletes  $fletes
     * @return \Illuminate\Http\Response
     */
    public function edit(Fletes $fletes)
    {
        return view('fletes.edit');        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fletes  $fletes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fletes $fletes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fletes  $fletes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fletes $fletes)
    {
        //
    }
}
