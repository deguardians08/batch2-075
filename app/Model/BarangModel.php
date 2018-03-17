<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'kode', 'nama'
    ];
    public function simpan($aa)
    {
    	# code...
    }
}
