<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Degree;
use Session;

class DegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $degrees=Degree::all();

        return view('degree.index')->withDegrees($degrees) ;
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
        $this->validate($request,array(
               'name' => 'required|max:255',
               'minimum_points'=>'required',
               'financial_aid'=>'required',
               'duration'=>'required'

               ));

              $degree = new Degree;

              $degree->name=$request->name;
              $degree->minimum_points= $request->minimum_points;
              $degree->financial_aid= $request->financial_aid;
               $degree->duration=$request->duration;

 
              $degree->save();
              
              Session::flash('success', 'The Categorie was successfully Created');
            return redirect()->route('degree.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
