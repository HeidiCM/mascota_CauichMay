<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{

    protected $table='mascotas';
    protected $primaryKey='id_mascota';


    public $with=['especie'];
    public $with=['raza'];
    public $with=['propietario'];
    //activar o desactivar etiquetas de tiempo
    public $timestamps=false;

    public $fillable=[
    	'id_mascota',
    	'id_especie',
    	'id_raza',
    	'id_propietario', 
    	'nombre',
    	'edad',
    	'peso',
    	'genero'
    ];
    public function especie()
    {
    	return $this->belongsTo(especies::class,
    	'id_especie','id_especie');  
    }
    public function raza()
    {
    	return $this->belongsTo(razas::class,
    	'id_raza','id_raza');  
    }
    public function propietario()
    {
    	return $this->belongsTo(propietarios::class,
    	'id_propietario','id_propietario');   
    }
}
