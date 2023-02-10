<?php

namespace Nanos\OpenaiExceptions;

use Spatie\Ignition\Contracts\HasSolutionsForThrowable;
use Throwable;

class OpenAiSolutionProvider implements HasSolutionsForThrowable
{

    public function canSolve(Throwable $throwable): bool
    {
        return config('openai-exceptions.canSolve')($throwable);
    }

    /**
     * @inheritDoc
     */
    public function getSolutions(Throwable $throwable): array
    {
        return [new OpenAiSolution($throwable)];
    }
}