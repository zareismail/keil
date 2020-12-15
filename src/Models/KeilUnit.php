<?php

namespace Zareismail\Keil\Models; 


class KeilUnit extends Model 
{   
	/**
	 * Query the related uints.
	 * 
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function group()
	{
		return $this->belongsTo(KeilGroup::class);
	}
}
