<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicaciones extends Model
{
	protected $table = "publicaciones";

     protected $fillable = [
        'id', 'tipo_publicacion_id', 'url', 'descripcion'
    ];

    public static function publicaciones($id) //obtiene las razas del paciente en session.
    {
        $razas = User::findOrFail($id)->publicaciones; //lista las razas del paciente en sesión.
        return $razas;
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
    public function queries()
    {
        return $this->belongsToMany('App\Query');
    }
    public function tiposPublicaciones()
    {
        return $this->belongsToMany('App\TiposPublicaciones');
    }
    
}
