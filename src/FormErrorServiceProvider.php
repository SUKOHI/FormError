<?php namespace Sukohi\FormError;

use Illuminate\Support\ServiceProvider;

class FormErrorServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var  bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'form-error');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/sukohi/form-error'),
        ], 'form-error-views');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['form-error'] = $this->app->share(function($app)
        {
            return new FormError;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['form-error'];
    }

}