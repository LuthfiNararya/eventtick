<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;

    protected $fillabale = [
        'users_id',
        'transaksis_id',
        'nama',
        'jenis_pembayaran',
        'bukti_pembayaran',
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
