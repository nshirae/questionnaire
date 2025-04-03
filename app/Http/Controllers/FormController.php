<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;

class FormController extends Controller
{
	public function index(Request $request)
	{
		if(isset($request->store))
		{
			//save
			$answer = new Answer();
			$answer->name = $request->name;
			$answer->answer = $request->answer;
			$answer->free = $request->free;
			$answer->save();
			
			return redirect()->action('FormController@thanks');
		}
		
		return view('form/index');
	}

	public function thanks()
	{
		return view('form/thanks');
	}

}
