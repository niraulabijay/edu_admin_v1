<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable=[
        'name', 'year', 'importance', 'image', 'marks',
    ];



    public function answers(){
        return $this->hasMany(Answer::Class);
    }

    public function chapter(){
        return $this->belongsTo(Chapter::class,'chapter_id');
    }
}
