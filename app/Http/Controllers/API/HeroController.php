<?php

namespace App\Http\Controllers\API;

use App\Hero;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class HeroController
 * @package App\Http\Controllers\API
 */
class HeroController extends Controller
{
    /**
     * Show all the Heroes
     * @return \Illuminate\Http\JsonResponse
     */
    public function index() {
        $heroes = Hero::all();

        return response()->json($heroes, 200);
    }

    /**
     * Create a new Hero
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        try{
            $hero = new Hero();
            $hero->fill($request->all());
            $hero->save();

            return response()->json($hero, 201);
        } catch ( \Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }

    /**
     * Update a Hero
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        try{
            $hero = Hero::findOrFail($id);
            $hero->update($request->all());

            return response()->json($hero, 201);
        } catch ( \Exception $e ){
            return response()->json($e->getMessage(), 500);
        }
    }

    /**
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $request, $id)
    {
        try{
            $hero = Hero::with('heroClass')->findOrFail($id);
            return response()->json($hero, 200);
        } catch ( \Exception $e ){
            return response()->json($e->getMessage(), 500);
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        $hero = Hero::findOrFail($id);
        $hero->delete();

        return response()->json('Hero deleted', 200);
    }

}
