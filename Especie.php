<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
     protected $table='especies';
    protected $primaryKey='id_especie';

    public $with=['mascota'];
    //activar o desactivar etiquetas de tiempo
    public $timestamps=false;

    public $fillable=[
    	'id_especie',
    	'especie'
    ];
    public function mascota()
    {
    	return $this->hasMany(mascotas::class,
    	'id_mascota','id_mascota');
    }
}
