<?php namespace Evasquez\LaravelBraintree;

use Illuminate\Support\ServiceProvider;
use Braintree_Configuration;

class LaravelBraintreeServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('evasquez/laravel-braintree');

        Braintree_Configuration::environment(
            $this->app['config']->get('laravel-braintree::braintree.environment')
        );

        Braintree_Configuration::merchantId(
            $this->app['config']->get('laravel-braintree::braintree.merchantId')
        );
        Braintree_Configuration::publicKey(
            $this->app['config']->get('laravel-braintree::braintree.publicKey')
        );
        Braintree_Configuration::privateKey(
            $this->app['config']->get('laravel-braintree::braintree.privateKey')
        );

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

}
