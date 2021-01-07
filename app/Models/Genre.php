<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable=['name'];
    public function movie(){
        return $this->hasMany('App\Models\Movie');
    }
    public function user()
    {
        return $this->belongsToMany('App\Models\User') -> withTimestamps();;
    }

}
