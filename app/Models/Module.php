<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\Subject;
use App\Models\User;
class Module extends Model
{
    use HasFactory;
    protected $fillable = ['id','title','description'];

    public function course()
    {
        return $this->belongsToMany(Course::class)->withTimestamps();
    }
    public function subject()
    {
        return $this->belongsToMany(Subject::class)->withTimestamps();
    }
    public function user()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
