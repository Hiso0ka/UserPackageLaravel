<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PackageProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      //  $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'packageprovider');
        $this->app->register(EventServiceProvider::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    
      //Cargar las vistas
      $this->loadViewsFrom(__DIR__.'/resources/views', 'packageprovider');

      //Para cargar las rutas
      //$this->loadRoutesFrom(__DIR__.'/routes/web.php');

      //Para cargar migraciones + comando -> php artisan migrate
      //$this->loadMigrationsFrom(__DIR__.'/database/migrations');

      $this->publishes([
        __DIR__.'/resources/views' => resource_path('views/vendor/package')
      ]);

      /*$this->publishes([
        __DIR__'/../public' => public_path('vendor/package'),
      ], 'public');*/
    }

}
