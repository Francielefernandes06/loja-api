<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $table= 'produtos';
    protected $fillable = [
        'name',
        'descricao',
        'preco',
        

    ];

    public function getPrecoAtributo(){
        return $this->attributes['preco']/100;
    }

    public function setPrecoAtributo($attr){

        $this->attributes['preco'] = $attr * 100;
    }

    public function loja()
    {
        return $this->belongsTo(Lojas::class);
    }

    use HasFactory;
}
