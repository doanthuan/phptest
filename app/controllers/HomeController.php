<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

    public function getIndex()
    {
        $colors = Color::all();

        return View::make('index', compact('colors'));
    }

    public function getVotes($colorId = null)
    {
        if(Request::ajax()){

        }

        $query = Vote::query();
        if($colorId){
            $query->where('color_id', $colorId);
        }
        $votes = $query->sum('votes');

        return $votes;
    }

}
