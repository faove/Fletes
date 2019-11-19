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

        $datos['fletes']=Fletes::paginate(5);
        return view('fletes.index',$datos);         
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
        //$datosFletes=request()->all();

        $datosFletes=request()->except('_token');

        if ($request->hasFile('fotoveh')){

            $datosFletes['fotoveh']=$request->file('fotoveh')->store('uploads','public');

        }

        Fletes::insert($datosFletes);

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
    public function edit($id)
    {
        
        $flete = Fletes::findOrFail($id);
        return view('fletes.edit',compact('flete'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fletes  $fletes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $datosFletes=request()->except(['_token','_method']);

        Fletes::where('id','=',$id)->update($datosFletes);

        $flete = Fletes::findOrFail($id);

        return view('fletes.edit',compact('flete'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fletes  $fletes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Fletes::destroy($id);

        return redirect('fletes'); 

    }
}
