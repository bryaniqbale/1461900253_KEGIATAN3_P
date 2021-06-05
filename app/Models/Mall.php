<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mall extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'nama',
        'harga',
    ];
}
