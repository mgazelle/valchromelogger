<?php namespace Mgazelle\Valchromelogger;

use Illuminate\Support\ServiceProvider;

class ValchromeloggerServiceProvider extends ServiceProvider {

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
		$this->package('mgazelle/valchromelogger');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['valchromelogger'] = $this->app->share(function($app)
		{
			return new Valchromelogger;
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('valchromelogger');
	}

}