<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'cpf',
        'email',
        'wpp',
        'telefone',
        'celular'
    ];

    public $regrasInsert = [
        'nome'     => 'required|max:255',
        'email'    => 'required|max:255|email',
        'celular'  => 'required'
    ]; 

}
