<?php

namespace Diezg\Collapsible;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('has-many-collapsible', __DIR__ . '/../dist/js/field.js');
            Nova::style('has-many-collapsible', __DIR__ . '/../dist/css/field.css');

            Nova::script('has-many-through-collapsible', __DIR__ . '/../dist/js/field.js');
            Nova::style('has-many-through-collapsible', __DIR__ . '/../dist/css/field.css');

            Nova::script('morph-to-many-collapsible', __DIR__ . '/../dist/js/field.js');
            Nova::style('morph-to-many-collapsible', __DIR__ . '/../dist/css/field.css');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
