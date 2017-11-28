<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    //
    protected $table = 'clientes';

    protected $primaryKey = 'numeroId';

    protected $fillable = [
    	'numeroId', 'nombre', 'telefono','finca', 'ubicacion', 'e_mail', 'idEncargado',
    ];

    public function nomEncargado()
    {
    	return $this->hasOne('App\Encargado', 'idEncargado', 'idEncargado');
    }
}
