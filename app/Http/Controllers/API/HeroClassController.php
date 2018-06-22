<?php

namespace App\Http\Controllers\API;

use App\Hero;
use App\HeroClass;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HeroClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heroClasses = HeroClass::all();

        return response()->json($heroClasses, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $heroClass = new HeroClass();
        $heroClass->fill($request->all());
        $heroClass->save();

        return response()->json($heroClass, 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $heroClass = Hero::findOrFail($id);
            return response()->json($heroClass, 200);
        } catch (\Exception $e){
            return response()->json($e->getMessage(), 404);
        }

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
        try{
            $heroClass = HeroClass::findOrFail($id);
            $heroClass->update($request->all());
            $heroClass->save();
            return response()->json($heroClass, 201);

        } catch ( \Exception $e ){
            return response()->json($e->getMessage(), 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $heroClass = HeroClass::find($id);
        $heroClass->delete();

        return response()->json('Hero Class deleted.', 200);
    }
}
