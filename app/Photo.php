<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  
    protected $images = '/images/';
    public function user(){
        return $this->belongsTo(User::class);   // each photo has 'user_id'
    }

    public function getPathAttribute($photo){
        return $this->images.$photo;
    }
}
