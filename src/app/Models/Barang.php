<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'kode', 'deskripsi', 'stok', 'harga'];

    protected static function booted(): void
    {
        static::creating(function ($barang) {
            if (!$barang->kode) {
                $barang->kode = self::generateKode();
            }
        });
    }

    public static function generateKode(): string
    {
        $prefix = 'BRG-';
        $lastId = self::max('id') ?? 0;
        $nextId = $lastId + 1;
        return $prefix . str_pad($nextId, 5, '0', STR_PAD_LEFT); // BRG-00001
    }
}
