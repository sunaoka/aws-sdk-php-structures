<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListMLModelTransformJobs;

trait ListMLModelTransformJobsTrait
{
    /**
     * @param ListMLModelTransformJobsRequest $args
     * @return ListMLModelTransformJobsResponse
     */
    public function listMLModelTransformJobs(ListMLModelTransformJobsRequest $args)
    {
        $result = parent::listMLModelTransformJobs($args->toArray());
        return new ListMLModelTransformJobsResponse($result->toArray());
    }
}
