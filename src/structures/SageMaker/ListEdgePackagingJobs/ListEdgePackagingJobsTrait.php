<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListEdgePackagingJobs;

trait ListEdgePackagingJobsTrait
{
    /**
     * @param ListEdgePackagingJobsRequest $args
     * @return ListEdgePackagingJobsResponse
     */
    public function listEdgePackagingJobs(ListEdgePackagingJobsRequest $args)
    {
        $result = parent::listEdgePackagingJobs($args->toArray());
        return new ListEdgePackagingJobsResponse($result->toArray());
    }
}
