<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs;

trait GetJobsTrait
{
    /**
     * @param GetJobsRequest $args
     * @return GetJobsResponse
     */
    public function getJobs(GetJobsRequest $args)
    {
        $result = parent::getJobs($args->toArray());
        return new GetJobsResponse($result->toArray());
    }
}
