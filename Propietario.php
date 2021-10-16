<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
     protected $table='propietarios';
    protected $primaryKey='id_propietario';

    public $with=['mascota'];
    //activar o desactivar etiquetas de tiempo
    public $timestamps=false;

    public $fillable=[
    	'id_propietario', 
    	'nombre',
    	'primer_apellido',
    	'segundo_apellido',
    	'celular',
    	'calle',
    	'colonia',
    	'numint',
    	'localidad'
    ];
    public function mascota()
    {
    	return $this->hasMany(mascotas::class,
    	'id_mascota','id_mascota');
    }
}
