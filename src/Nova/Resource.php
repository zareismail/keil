<?php

namespace Zareismail\Keil\Nova;
 
use Zareismail\NovaContracts\Nova\Resource as BaseResource; 

abstract class Resource extends BaseResource
{ 
    /**
     * The logical group associated with the resource.
     *
     * @var string
     */
    public static $group = 'Keil'; 

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The relationships that should be eager loaded when performing an index query.
     *
     * @var array
     */
    public static $with = [];

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name'
    ]; 

    /**
     * Get the URI key for the resource.
     *
     * @return string
     */
    public static function uriKey()
    {
        return 'keil-' . parent::uriKey();
    } 
}