<?php

namespace Zareismail\Keil\Models; 


class KeilGroup extends Model 
{   
	/**
	 * Query the related uints.
	 * 
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function units()
	{
		return $this->hasMany(KeilUnit::class, 'group_id');
	}
}
