<?php

namespace Okipa\LaravelModelJsonStorage;

use Illuminate\Support\ServiceProvider;

class ModelJsonStorageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/model-json-storage.php' => config_path('model-json-storage.php'),
        ], 'model-json-storage::config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/model-json-storage.php', 'model-json-storage'
        );
    }
}
