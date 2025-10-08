<?php

namespace Sunaoka\Aws\Structures\Sfn\StartExecution;

trait StartExecutionTrait
{
    /**
     * @param StartExecutionRequest $args
     * @return StartExecutionResponse
     */
    public function startExecution(StartExecutionRequest $args)
    {
        $result = parent::startExecution($args->toArray());
        return new StartExecutionResponse($result->toArray());
    }
}
