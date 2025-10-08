<?php

namespace Sunaoka\Aws\Structures\IoTJobsDataPlane\UpdateJobExecution;

trait UpdateJobExecutionTrait
{
    /**
     * @param UpdateJobExecutionRequest $args
     * @return UpdateJobExecutionResponse
     */
    public function updateJobExecution(UpdateJobExecutionRequest $args)
    {
        $result = parent::updateJobExecution($args->toArray());
        return new UpdateJobExecutionResponse($result->toArray());
    }
}
