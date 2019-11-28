<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SubSubject extends Model
{
    protected $fillable=[
        'name', 'subject_id', 'sub_subject_id',
    ];

    public function chapters(){
        return $this->hasMany(Chapter::class);
    }

    public function subject(){
        return $this->belongsTo(Subject::class,'subject_id');
    }

    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }
}
