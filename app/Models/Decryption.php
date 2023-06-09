<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decryption extends Model
{
    use HasFactory;

    protected $table = 'decryption';

    protected $fillable = [
        'uploaded_file',
        'initialization_vector',
        'encryption_key',
        'processed_file',
    ];
}
