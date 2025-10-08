<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAutoMLJobs;

trait ListAutoMLJobsTrait
{
    /**
     * @param ListAutoMLJobsRequest $args
     * @return ListAutoMLJobsResponse
     */
    public function listAutoMLJobs(ListAutoMLJobsRequest $args)
    {
        $result = parent::listAutoMLJobs($args->toArray());
        return new ListAutoMLJobsResponse($result->toArray());
    }
}
