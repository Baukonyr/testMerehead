<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
	protected $table = 'books';
	
	protected $fillable = [
	  'name',
	  'page',
	  'description',
	  'picture',
	];
	
	
	
	public function authors(){
		return $this->belongsToMany('App\Author', 'author_book', 'book_id', 'author_id');
	}
}
