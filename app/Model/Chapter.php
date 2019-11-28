<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $fillable=[
        'name',
    ];

    public function questions(){
        return $this->hasMany(Question::class);
    }

    public function sub_subject(){
        return $this->belongsTo(SubSubject::class,'sub_subject_id');
    }

}
