<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Course
 *
 * @mixin \Eloquent
 */
class Course extends Model
{
    const PUBLISHED =1;
    const PENDING = 2;
    const REJECTED = 3;

    public function category(){
            return $this->belongsTo(Category::class)->select('id', 'name');

    }

    public function goals(){
        return $this->hasMany(Goal::class)->select('id','course_id','goal');

    }

    public function level(){
        return $this->belongsTo(Level::class)->select('name','id');
    }

    public function reviews(){
        return $this-> hasMany(Review::class)->select('id','user_id','course_id','rating','comment','created_at');
    }

    public function requirements(){
        return $this->hasMany(Requirement::class)->select('id','course_id','requirement');
    }
    public function students(){

    }

}
