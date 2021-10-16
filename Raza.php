<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raza extends Model
{
    protected $table='razas';
    protected $primaryKey='id_raza';

    public $with=['mascota'];
    //activar o desactivar etiquetas de tiempo
    public $timestamps=false;

    public $fillable=[
    	'id_raza',
    	'raza'
    ];
    public function mascota()
    {
    	return $this->hasMany(mascotas::class,
    	'id_mascota','id_mascota');
    }
}
