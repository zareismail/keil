<?php

namespace Zareismail\Keil\Nova;  

use Illuminate\Http\Request;
use Laravel\Nova\Fields\{ID, Text, BelongsTo};  

class MeasuringUnit extends Resource
{     
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \Zareismail\Keil\Models\KeilUnit::class;

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

            BelongsTo::make(__('Measuring Group'), 'group', MeasuringGroup::class)
                ->showCreateRelationButton()
                ->withoutTrashed()
                ->required()
                ->rules('required')
                ->inverse('units'),

            Text::make(__('Unit Name'), 'name')
                ->required()
                ->rules('required'),

            Text::make(__('Unit Synmbol'), 'symbol')
                ->required()
                ->rules('required'),
        ];
    }      
}