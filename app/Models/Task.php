<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name',
        'description',
        'project_id'
    ];

    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }
    public function member()
    {
        return $this->belongstoMany('App\Models\Member');
    }


    use HasFactory;
}
