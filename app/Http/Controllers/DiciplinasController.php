<?php

namespace App\Http\Controllers;

use App\Diciplinas;
use Illuminate\Http\Request;

class DiciplinasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diciplinas = Diciplinas::all();

        return view('profile.diciplinas', compact('diciplinas'));
        
     
    }
    public function diciplinas(){
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Diciplinas  $diciplinas
     * @return \Illuminate\Http\Response
     */
    public function show(Diciplinas $diciplinas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Diciplinas  $diciplinas
     * @return \Illuminate\Http\Response
     */
    public function edit(Diciplinas $diciplinas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Diciplinas  $diciplinas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diciplinas $diciplinas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Diciplinas  $diciplinas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diciplinas $diciplinas)
    {
        //
    }
}
