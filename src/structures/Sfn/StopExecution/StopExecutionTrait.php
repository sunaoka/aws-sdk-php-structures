<?php

namespace Sunaoka\Aws\Structures\Sfn\StopExecution;

trait StopExecutionTrait
{
    /**
     * @param StopExecutionRequest $args
     * @return StopExecutionResponse
     */
    public function stopExecution(StopExecutionRequest $args)
    {
        $result = parent::stopExecution($args->toArray());
        return new StopExecutionResponse($result->toArray());
    }
}
