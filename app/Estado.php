<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estado';
    protected $primaryKey = 'id_estado';

    // Define somente os campos que podem ser alterados
    protected $fillable = [
        'sigla_estado',
        'nome_estado'
    ];     

    public function obterPorId($pk) {
        $obj = $this->where('id_estado',$pk)->get();
        return response()->json($obj, 200);
    }

    public function obterPorTodos() {
        $obj=$this->all();
        return response()->json($obj, 200);
    }
    
}
