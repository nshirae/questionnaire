<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;

class GraphController extends Controller
{

	private $_ansMasterList = array(
		'1' => array(
			'name' => 'ハワイ)お嫁さん',
			'color' => '#f85252',
		),
		'2' => array(
			'name' => 'ヨーロッパ)旦那さん',
			'color' => '#2ba6f3',
		),
	);

	public function index()
	{
		//取得
		$answer= new Answer;
/*
        name: '旅行先',
        data: [{
            name: 'ハワイ)お嫁さん',
            y: 59.2,
            //sliced: true,
            //selected: true,
            color: '#f85252'
        }
*/
		$countAll = $answer->where('disabled', 0)->whereIn('answer', array_keys($this->_ansMasterList))->count();
		
		$series = array(
			'name' => '旅行先',
			'data' => array(),
		);
		foreach($this->_ansMasterList as $ansVal => $ansData)
		{
			$count = $answer->where('disabled', 0)->where('answer', $ansVal)->count();

			//%計算
			$c = round($count / $countAll * 100, 1);
			$data = array(
				'y' => $c,
			);
			$data = array_merge($data, $ansData);
			
			$series['data'][] = $data;
		}
		
		return view('graph/index', compact('series'));
	}
}
