<?php
/**
 * Created by PhpStorm.
 * User: imden
 * Date: 2017/11/27
 * Time: 下午5:18
 */

namespace DemonAndAngel\Demo;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ComposerDemoProvider extends LaravelServiceProvider
{
    /**
     * Boot the provider.
     *
     * @return void
     */
    public function boot()
    {
    }
    /**
     * Register the provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Demo::class, function ($app) {
            return new Demo();
        });
    }

}