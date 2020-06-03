<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function childs()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
