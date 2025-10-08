<?php

namespace Sunaoka\Aws\Structures\Sfn\StartSyncExecution;

trait StartSyncExecutionTrait
{
    /**
     * @param StartSyncExecutionRequest $args
     * @return StartSyncExecutionResponse
     */
    public function startSyncExecution(StartSyncExecutionRequest $args)
    {
        $result = parent::startSyncExecution($args->toArray());
        return new StartSyncExecutionResponse($result->toArray());
    }
}
