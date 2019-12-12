<?php

namespace App\Models\MDSEAdmin;

use Illuminate\Database\Eloquent\Model;

class MDSERol extends Model
{
    // 
    protected $table = "MDSERol";
    protected $fillable = ["nombreRol"];
    protected $guarded = ["idRol"];
}
