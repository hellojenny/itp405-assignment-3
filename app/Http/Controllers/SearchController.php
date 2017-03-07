<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
	public function search() {
		return view('search');
	}

	public function results() {
		$title = request('title');

        if (!$title) {
            $title = "Displaying all DVDs";
            $dvds = DB::table('dvds')
            ->select('title', 'rating_name', 'genre_name')
            ->join('ratings', 'dvds.rating_id', '=', 'ratings.id')
            ->join('genres', 'dvds.genre_id', '=', 'genres.id')
            ->orderBy('title', 'asc')
            ->get();
        }

        else {
            $dvds = DB::table('dvds')
                ->select('title', 'rating_name', 'genre_name')
                ->join('ratings', 'dvds.rating_id', '=', 'ratings.id')
                ->join('genres', 'dvds.genre_id', '=', 'genres.id')
                ->where('title', 'like', "%$title%")
                ->orderBy('title', 'asc')
                ->get();
        }

        return view('results', [
            'title' => $title,
            'dvds' => $dvds
        ]);
	}
}