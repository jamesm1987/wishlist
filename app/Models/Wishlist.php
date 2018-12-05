<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
	protected $table = 'wishlists';

	protected $fillable = ['name'];


	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function items()
	{
		return $this->haMany(Listitem::class);
	}

}
