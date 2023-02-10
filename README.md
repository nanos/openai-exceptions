# OpenAI powered fixes for your Laravel errors

Run
```php
php artisan vendor:publish --provider="Nanos\OpenaiExceptions\OpenAiSolutionServiceProvider" --tag="config"
```

To customise prompt run 
```php
 php artisan vendor:publish --provider="Nanos\OpenaiExceptions\OpenAiSolutionServiceProvider" --tag="views"
```