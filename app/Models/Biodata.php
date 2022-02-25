<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    public $table = "biodata";

    protected $fillable = [
        'nama',
        'lahir',
        'tgl',
        'hobi',
        'jk',
        'telp',
        'email',
    ];
}
