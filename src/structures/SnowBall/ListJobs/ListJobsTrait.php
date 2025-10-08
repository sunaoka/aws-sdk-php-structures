<?php

namespace Sunaoka\Aws\Structures\SnowBall\ListJobs;

trait ListJobsTrait
{
    /**
     * @param ListJobsRequest $args
     * @return ListJobsResponse
     */
    public function listJobs(ListJobsRequest $args)
    {
        $result = parent::listJobs($args->toArray());
        return new ListJobsResponse($result->toArray());
    }
}
