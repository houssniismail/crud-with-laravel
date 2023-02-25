<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\sereses;
use Illuminate\Database\Eloquent\Model;
class servesController extends Controller
{
    /**
     * Display a listing of the resource.
     */     
  public function index()
    {
        $serveses = sereses::all();
        return view('serveses.index')->with('serveses',$serveses);
    }

    /**
     * Show the form for creating a new resource.
     */
     public function create()
    {
        return view('serveses/create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        sereses::create($input);
        return redirect('serves')->with('flash_message', 'serves added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
