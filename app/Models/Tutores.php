<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutores extends Model
{
    use HasFactory;
    public $fillable = ['nombre_empresa', 'tipo_documento', 'documento_identidad', 'nombre_tutor', 'primer_apellido_tutor', 'segundo_apellido_tutor', 'pais_documento', 'provincia', 'municipio', 'estado', 'telefono', 'email'];

}
