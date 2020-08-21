<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Workoutmenu;

use Carbon\Carbon;

class WorkoutmenusController extends Controller
{
        public function index()
    {
    if (\Auth::check()) {
        $user = \Auth::user();
        
        $user->created_at;
        
        $user->last_login_at;
        
        $carbon2 = new Carbon($user->last_login_at);
        
        $diffInDays = $user->created_at->diffInDays($carbon2);
        
        $todaysmenu = Workoutmenu::where('lapseddays', '=', $diffInDays)->get();
        
        foreach ($todaysmenu as $workoutmenu) {
            if ($workoutmenu->content == 'Arms') {
                return view('workoutmenus.arms' , [
                   'todaysmenu' => $todaysmenu
                   ]);
            }
            elseif ($workoutmenu->content == 'Shoulders') {
                return view('workoutmenus.shoulders' , [
                   'todaysmenu' => $todaysmenu
                   ]);
            }
            elseif ($workoutmenu->content == 'Back') {
                return view('workoutmenus.back' , [
                    'todaysmenu' => $todaysmenu
                    ]);
            }
            elseif ($workoutmenu->content == 'Legs') {
                return view('workoutmenus.back' , [
                    'todaysmenu' => $todaysmenu
                    ]);
            }
            else {
                return view('workoutmenus.chest' , [
                    'todaysmenu' => $todaysmenu
                    ]);
            }
        }
    
        //return view('workoutmenus.index', [
        //    'todaysmenu' => $todaysmenu
        //    ]);
    }
    else{
        return view('welcome');
    }
    }
}
