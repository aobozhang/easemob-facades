<?php namespace Aobo\Easemob;

use Illuminate\Support\ServiceProvider;

class EasemobServiceProvider extends ServiceProvider {

    /**
    * Bootstrap the application services.
    *
    * @return void
    */
    public function boot()
    {

        // $this->mergeConfigFrom(__DIR__.'/config/easemob.php', 'easemob');
    }

    /**
    * Register the service provider.
    *
    * @return void
    */
    public function register()
    {
        $this->publishes([

            __DIR__.'/config/easemob.php' => config_path('easemob.php'),

        ]);

        $this->app->singleton('easemob', function($app){

            return new EasemobClass($app['config']['easemob']);

        });

        $this->app->booting( function($app){

            $aliases = $app['config']['aliases'];

            if(empty($aliases['Easemob'])){

                $loader = \Illuminate\Foundation\AliasLoader::getInstance();
                $loader->alias('Easemob','Aobo\Easemob\Facades\Easemob');

            }
        });
    }
}
