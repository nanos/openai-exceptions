<?php

namespace Nanos\OpenaiExceptions;

use Illuminate\Support\ServiceProvider;
use Spatie\Ignition\Contracts\SolutionProviderRepository;

class OpenAiSolutionServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'openai-exceptions');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/nanos/openai-exceptions'),
        ], 'views');

        $this->publishes([
            __DIR__.'/../config/openai-exceptions.php' => config_path('openai-exceptions.php'),
        ], 'config');

        if(config('openai.api_key')) {
            $this->app->make(SolutionProviderRepository::class)
                ->registerSolutionProvider(OpenAiSolutionProvider::class);
        }
    }
}