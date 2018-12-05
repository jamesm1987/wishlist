<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listitem extends Model
{
   protected $table = 'listitems';

   protected $fillable = ['name','image', 'details', 'url',  'price'];

	public function wishlist()
	{
		return $this->belongsTo(Wishlist::class);
	}
}
