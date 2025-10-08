<?php

namespace Sunaoka\Aws\Structures\SnowBall\ListClusterJobs;

trait ListClusterJobsTrait
{
    /**
     * @param ListClusterJobsRequest $args
     * @return ListClusterJobsResponse
     */
    public function listClusterJobs(ListClusterJobsRequest $args)
    {
        $result = parent::listClusterJobs($args->toArray());
        return new ListClusterJobsResponse($result->toArray());
    }
}
