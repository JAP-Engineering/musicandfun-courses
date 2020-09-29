<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Module;
class Subject extends Model
{
    use HasFactory;
    public function module()
    {
        return $this->belongsToMany(Module::class)->withTimestamps();
    }
}
