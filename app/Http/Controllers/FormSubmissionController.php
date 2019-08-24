<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Log;

class FormSubmissionController extends Controller
{

	public function __construct()
    {
        $this->accums = array();
        $this->accums_level = array();
        $this->data = array();
    }

    protected function create(Request $request){
    	$data = $request->toArray();
        $this->data = $data;
    	$games = array();
    	for ($i=1; $i <= (int) $data['no_of_matches']; $i++) { 
    		$match = $data['home_team'.(string)$i].' vs '.$data['away_team'.(string)$i];
    		$game = array('match' => $match, 'level' => $data['level'.(string)$i]);
    		array_push($games, $game);
    	}
    	$this->accums = $this->generate_accums((int) $data['sets']);
    	$this->accums_level = $this->accums;
    	foreach ($games as $game) {
    		for ($j=1; $j <= $this->calc_levels($data['sets'], $game['level']); $j++) { 
    			$this->insert_game($game['match'], $game['level'], (int) $data['sets'], 0);
    		}
    	}
    	return view('results')->with('accums',  $this->sort_accums($this->accums_level));
    }

    protected function generate_accums($data){
    	$accums = array();
    	for ($i=1; $i <= $data; $i++) { 
    		$accums['accum'.(string)$i] = array();
    	}
    	return $accums;
    }

    protected function calc_levels($sets, $level){
        if($sets < 8 && $sets > 4){
            return $level;
        }elseif ($sets < 5) {
            if($level > 3){
                return $sets;
            }elseif($level == 3){
                return $sets - 1;
            }else{return 1;}
        }else{
            return $level + 1;
        }
    }
	
	protected function insert_game($match, $level, $sets, $iterations){
        if($iterations < 10){
            $index = rand(1, $sets);
            if(!in_array($match, $this->accums['accum'.(string)$index])){
                array_push($this->accums['accum'.(string)$index], $match);
                array_push($this->accums_level['accum'.(string)$index], array('match' => $match, 'level' => $level));
            }else{
                $this->insert_game($match, $level, $sets, $iterations+1);
            }
            return;
        }
		return;
	}	

    protected function sort_accums($accums){
        $sorted = array();
        foreach ($accums as $key => $accum) {
           usort($accum, function($a, $b) {
                return $b['level'] <=> $a['level'];
            });
         $sorted[$key] = $accum;
        }
        return $sorted;
    }
}
