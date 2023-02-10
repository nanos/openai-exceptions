<?php

return [

    /*
    *--------------------------------------------------------------------------
    * OpenAI API Key and Organization
    *--------------------------------------------------------------------------
    *
    * you can find your API key and organization on your OpenAI dashboard,
    * at https://openai.com.
    */
    'api_key' => env('OPENAI_API_KEY'),
    'organization' => env('OPENAI_ORGANIZATION'),

    /**
     * cache: Define for how many seconds you want to cache API responses.
     * Default: 1 week
     */
    'cache' => 7 * 24 * 60 * 60,
    /**
     * The OpenAPI model to use.
     */
    'model' => 'text-davinci-003',
    /**
     * The maximum number of tokens to return in your suggestion
     */
    'max_tokens' => 200,
    /**
     * What sampling temperature to use, between 0 and 2. Higher values like 0.8
     * will make the output more random, while lower values like 0.2 will make it
     * more focused and deterministic.
     */
    'temperature' => 0,
];