<?php

namespace Sunaoka\Aws\Structures\DataSync\ListDiscoveryJobs;

trait ListDiscoveryJobsTrait
{
    /**
     * @param ListDiscoveryJobsRequest $args
     * @return ListDiscoveryJobsResponse
     */
    public function listDiscoveryJobs(ListDiscoveryJobsRequest $args)
    {
        $result = parent::listDiscoveryJobs($args->toArray());
        return new ListDiscoveryJobsResponse($result->toArray());
    }
}
