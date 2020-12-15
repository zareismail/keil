<?php

namespace Zareismail\Keil;
 
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Nova\Nova as LaravelNova; 

class KeilServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Models\KeilUnit::class => Policies\KeilUnit::class, 
        Models\KeilGroup::class => Policies\KeilGroup::class, 
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadJsonTranslationsFrom(__DIR__.'/../resources/lang');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');  
        LaravelNova::serving([$this, 'servingNova']);
        $this->registerPolicies();
    } 

    /**
     * Register any nova services.
     *
     * @return void
     */
    public function servingNova()
    {
        LaravelNova::resources([
            Nova\MeasuringUnit::class,
            Nova\MeasuringGroup::class,
        ]);
    } 
}
