<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTransformJobs;

trait ListTransformJobsTrait
{
    /**
     * @param ListTransformJobsRequest $args
     * @return ListTransformJobsResponse
     */
    public function listTransformJobs(ListTransformJobsRequest $args)
    {
        $result = parent::listTransformJobs($args->toArray());
        return new ListTransformJobsResponse($result->toArray());
    }
}
