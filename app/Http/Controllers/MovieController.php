<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Lista de todas las películas
     * Tipo: GET
     */
    public function listMovies(){
        $movies = Movie::get();

        return response()->json([
            'movies' => $movies,
            'status' => true
        ]);
    }
    public function listado(){

        $peliculas= Movie::get();
        return response()->json([
            'movies' =>$peliculas,
            'status' =>false
        ]);

    }

    /**
     * Encontrar una película por su código
     * Tipo: GET
     */
    public function findMovie($id){
        $movie = Movie::findOrFail($id);

        return response()->json([
            'movie' => $movie,
            'status' => true
        ]);
    }

    /**
     * Registrar una nueva película
     * Tipo: POST
     */
    public function saveMovie(Request $request){
        try{
            $movie = new Movie;
            $movie->title = $request->title;
            $movie->description = $request->description;
            $movie->release_date = $request->release_date;
            $movie->duration = $request->duration;
            $movie->genre = $request->genre;

            $movie->save();

            return response()->json([
                'message' => 'Película registrada con éxito',
                'status' => true
            ]);

        } catch(Exception $e) {
            return response()->json([
                'message' => 'Error en registro de película',
                'status' => false
            ]);
        }
    }

    /**
     * Actualizar una película existente
     * Tipo: PUT
     */
    public function updateMovie(Request $request, $id){
        try{
            $movie = Movie::findOrFail($id);
            $movie->title = $request->title;
            $movie->description = $request->description;
            $movie->release_date = $request->release_date;
            $movie->duration = $request->duration;
            $movie->genre = $request->genre;

            $movie->update();

            return response()->json([
                'message' => 'Película actualizada con éxito',
                'status' => true
            ]);

        } catch(Exception $e) {
            return response()->json([
                'message' => 'Error en actualización de película',
                'status' => false
            ]);
        }
    }

    /**
     * Eliminar una película existente
     * Tipo: DELETE
     */
    public function deleteMovie($id){
        try{
            $movie = Movie::findOrFail($id);
            $movie->delete();

            return response()->json([
                'message' => 'Película eliminada con éxito',
                'status' => true
            ]);

        } catch(Exception $e) {
            return response()->json([
                'message' => 'Error en eliminación de película',
                'status' => false
            ]);
        }
    }

    
}
