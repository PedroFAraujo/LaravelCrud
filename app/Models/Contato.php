<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    //essa variável é responsável por definir as variáveis utilizadas em contato
    protected $fillable = [
        'nome',
        'telefone',
        'email'
    ];
    
}
