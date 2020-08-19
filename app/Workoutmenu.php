<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workoutmenu extends Model
{
    protected $fillable = ['content', 'lapseddays'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
