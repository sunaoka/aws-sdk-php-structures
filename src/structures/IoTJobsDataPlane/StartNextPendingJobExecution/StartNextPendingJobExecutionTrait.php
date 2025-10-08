<?php

namespace Sunaoka\Aws\Structures\IoTJobsDataPlane\StartNextPendingJobExecution;

trait StartNextPendingJobExecutionTrait
{
    /**
     * @param StartNextPendingJobExecutionRequest $args
     * @return StartNextPendingJobExecutionResponse
     */
    public function startNextPendingJobExecution(StartNextPendingJobExecutionRequest $args)
    {
        $result = parent::startNextPendingJobExecution($args->toArray());
        return new StartNextPendingJobExecutionResponse($result->toArray());
    }
}
