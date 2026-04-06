<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListOptimizationJobs;

trait ListOptimizationJobsTrait
{
    /**
     * @param ListOptimizationJobsRequest $args
     * @return ListOptimizationJobsResponse
     */
    public function listOptimizationJobs(ListOptimizationJobsRequest $args)
    {
        $result = parent::listOptimizationJobs($args->toArray());
        return new ListOptimizationJobsResponse($result->toArray());
    }
}
