<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicaciones extends Model
{
	protected $table = "tipos_publicaciones";

     protected $fillable = [
        'id', 'title'
    ];
    
    
}
