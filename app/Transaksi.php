<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $guarded = [];

    public function pemilik()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    
    public function barang()
    {
        return $this->belongsTo('App\Barang');
    }
}
