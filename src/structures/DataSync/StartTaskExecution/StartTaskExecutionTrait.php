<?php

namespace Sunaoka\Aws\Structures\DataSync\StartTaskExecution;

trait StartTaskExecutionTrait
{
    /**
     * @param StartTaskExecutionRequest $args
     * @return StartTaskExecutionResponse
     */
    public function startTaskExecution(StartTaskExecutionRequest $args)
    {
        $result = parent::startTaskExecution($args->toArray());
        return new StartTaskExecutionResponse($result->toArray());
    }
}
