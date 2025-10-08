<?php

namespace Sunaoka\Aws\Structures\IoTJobsDataPlane\GetPendingJobExecutions;

trait GetPendingJobExecutionsTrait
{
    /**
     * @param GetPendingJobExecutionsRequest $args
     * @return GetPendingJobExecutionsResponse
     */
    public function getPendingJobExecutions(GetPendingJobExecutionsRequest $args)
    {
        $result = parent::getPendingJobExecutions($args->toArray());
        return new GetPendingJobExecutionsResponse($result->toArray());
    }
}
