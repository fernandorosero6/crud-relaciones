<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $descripcion
 * @property $precio
 * @property $stock
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */





 class Product extends Model
{

    protected $perPage = 20;

    protected $fillable = ['descripcion', 'precio', 'stock'];

    public function Clientes(){
        return $this->belongsToMany(Cliente::class, 'cliente_products', 'product_id', 'cliente_id');
    }

    public function Provedors(){
        return $this->belongsTo('App\Models\Provedor');
    }

}
