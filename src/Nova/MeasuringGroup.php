<?php

namespace Zareismail\Keil\Nova;  

use Illuminate\Http\Request;
use Laravel\Nova\Fields\{ID, Text, HasMany};  

class MeasuringGroup extends Resource
{     
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \Zareismail\Keil\Models\KeilGroup::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            Text::make(__('Name'), 'name')
                ->required()
                ->rules('required'),

            HasMany::make(__('Measuring Units'), 'units', MeasuringUnit::class),
        ];
    }      
}