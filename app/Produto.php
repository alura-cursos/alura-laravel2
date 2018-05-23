<?php namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {

    protected $table = 'produtos';
    public $timestamps = false;

    protected $fillable =
        array('nome', 'descricao',
            'quantidade', 'valor', 'tamanho', 'categoria_id');

    public function categoria(){
        return $this->belongsTo('estoque\Categoria');
    }
}