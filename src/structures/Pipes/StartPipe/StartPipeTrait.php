<?php

namespace Sunaoka\Aws\Structures\Pipes\StartPipe;

trait StartPipeTrait
{
    /**
     * @param StartPipeRequest $args
     * @return StartPipeResponse
     */
    public function startPipe(StartPipeRequest $args)
    {
        $result = parent::startPipe($args->toArray());
        return new StartPipeResponse($result->toArray());
    }
}
