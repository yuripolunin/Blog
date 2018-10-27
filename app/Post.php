<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable;

    const IS_DRAFT = 0;
    const IS_PUBLIC = 1;

    protected $fillable = ['title', 'content'];
    
    public function category()
    {
    	return $this->hasOne(Category::class);
    }

    public function author()
    {
    	return $this->hasOne(User::class);
    }

    public function tags()
    {
    	return $this->belongsToMany(

    		Tag::class,
    		'post_tags',
    		'post_id',
    		'tag_id'
    	);
    }


    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
