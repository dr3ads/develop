<?php

namespace CopyAndPaste;

class ServiceProvider extends \Illuminate\Support\ServiceProvider {

    public function boot()
    {
        $this->publishes([
            DEV_PATH.'/docker-files/docker' => base_path('docker'),
            DEV_PATH.'/docker-files/docker-compose.yml' => base_path('docker-compose.yml'),
            DEV_PATH.'/docker-files/develop' => base_path('develop'),
        ]);
    }

    public function register()
    {
        if (! defined('DEV_PATH')) {
            define('DEV_PATH', realpath(__DIR__.'/../'));
        }
    }

}