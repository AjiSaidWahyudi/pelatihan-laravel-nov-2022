<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'book';
    protected $guarded = [];
    public function book_code()
    {
        return $this->hasMany(BookCode::class);
    }
}
