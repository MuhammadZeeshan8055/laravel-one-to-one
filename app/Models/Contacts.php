<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;
    protected $guarded=[];
    public $timestamps=false;

    public function Student(){
        return $this->belongsTo(Student::class);
    }
}
