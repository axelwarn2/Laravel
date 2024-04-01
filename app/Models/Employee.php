<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public function Departament(){
        return $this->belongsTo(Departament::class);
    }

    public function Job(){
        return $this->belongsTo(Job::class);
    }

    protected $fillable = ['surname', 'departament_id', 'job_id', 'receipt', 'data', 'supplement'];
}
