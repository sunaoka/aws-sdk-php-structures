<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListProcessingJobs;

trait ListProcessingJobsTrait
{
    /**
     * @param ListProcessingJobsRequest $args
     * @return ListProcessingJobsResponse
     */
    public function listProcessingJobs(ListProcessingJobsRequest $args)
    {
        $result = parent::listProcessingJobs($args->toArray());
        return new ListProcessingJobsResponse($result->toArray());
    }
}
