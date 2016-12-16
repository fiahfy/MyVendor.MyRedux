<?php

namespace MyVendor\MyRedux\Module;

use BEAR\Package\PackageModule;
use BEAR\ReactJsModule\ReduxModule;
use Ray\Di\AbstractModule;
use josegonzalez\Dotenv\Loader as Dotenv;

class AppModule extends AbstractModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        Dotenv::load([
            'filepath' => dirname(dirname(__DIR__)) . '/.env',
            'toEnv' => true
        ]);
        $this->install(new PackageModule);
        $distDir = dirname(__DIR__, 2) . '/var/www/dist';
        $this->install(new ReduxModule($distDir, 'ssr_hello'));
    }
}
