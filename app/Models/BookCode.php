<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCode extends Model
{
    use HasFactory;
    protected $table = 'book_code';
    protected $guarded = [];
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
