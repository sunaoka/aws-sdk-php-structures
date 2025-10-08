<?php

namespace Sunaoka\Aws\Structures\Pipes\StopPipe;

trait StopPipeTrait
{
    /**
     * @param StopPipeRequest $args
     * @return StopPipeResponse
     */
    public function stopPipe(StopPipeRequest $args)
    {
        $result = parent::stopPipe($args->toArray());
        return new StopPipeResponse($result->toArray());
    }
}
