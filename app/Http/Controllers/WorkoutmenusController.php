<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Workoutmenu;

use Carbon\Carbon;

class WorkoutmenusController extends Controller
{
        public function index()
    {
        
        
        $user = \Auth::user();
        
        $user->created_at;
        $user->last_login_at;
        
        $carbon2 = new Carbon($user->last_login_at);
        
        $diffInDays = $user->created_at->diffInDays($carbon2);
        
        $todaysmenu = Workoutmenu::where('lapseddays', '=', $diffInDays)->get();
    
    
        return view('workoutmenus.index', [
            'todaysmenu' => $todaysmenu
            ]);
    }
}
