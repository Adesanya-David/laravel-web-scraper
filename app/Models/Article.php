<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Article extends Model
{
    protected $table = "article";
    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }
    public function website()
    {
        return $this->belongsTo('App\Website', 'website_id');
    }

    use HasFactory;
}

