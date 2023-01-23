<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lojas extends Model
{
    protected $table= 'lojas';
    protected $fillable = [
        'name',
        'descricao',
    ];

    public function produtos()
    {
        return $this->hasMany(Produtos::class);
    }
    use HasFactory;
}
