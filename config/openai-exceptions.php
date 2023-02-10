<?php

return [

    /*
    * You only need to set these, if you haven't already set them in `openai.api_key` and `openai.organization`
    * If yu have set them there, then the values provided here will be ignored.
    * You can find your API key and organization on your OpenAI dashboard at https://openai.com.
    */
    'api_key' => env('OPENAI_API_KEY'),
    'organization' => env('OPENAI_ORGANIZATION'),

    /**
     * This method decides if OpenAI will be used for your exception: Return `false` to exclude exceptions
     */
    'canSolve' => function(Throwable $throwable): bool
    {
        return true;
    },

    /**
     * cache: Define for how many seconds you want to cache API responses.
     * Default: 1 week
     */
    'cache' => 7 * 24 * 60 * 60,

    /**
     * The OpenAPI model to use. Possible values are
     *  - text-davinci-003
     *  - text-curie-001
     *  - text-babbage-001
     *  - text-ada-001
     * See https://platform.openai.com/docs/models/codex for a description of the models
     */
    'model' => 'text-davinci-003',

    /**
     * The maximum number of tokens to generate in the completion.
     * A helpful rule of thumb is that one token generally corresponds to ~4 characters of
     * text for common English text. This translates to roughly ¾ of a word
     * (so 100 tokens ~= 75 words).
     */
    'max_tokens' => 200,

    /**
     * What sampling temperature to use, between 0 and 2. Higher values like 0.8
     * will make the output more random, while lower values like 0.2 will make it
     * more focused and deterministic.
     */
    'temperature' => 0,
];