<?php

namespace Terrarium\HelloWorld;

use Terrarium\Core as Terrarium;
use Illuminate\Support\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'helloworld');
        $this->loadRoutesFrom(__DIR__ . '/../routes/helloworld.php');
    }

    /**
     * Publish the plugin configuration.
     */
    public function boot()
    {
        $terrariumMenu = Terrarium::menu();

        $terrarium = $terrariumMenu->getHeading('Terrarium');
        $terrarium->addItem('Hello World', 'terrarium.helloworld.index', 'fa-hand-paper-o', true);

        Terrarium::settings()->addSettingPage('Hello World', 'terrarium.helloworld.settings');
    }
}
