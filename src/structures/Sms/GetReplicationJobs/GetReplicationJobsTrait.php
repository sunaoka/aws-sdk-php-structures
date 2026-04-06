<?php

namespace Sunaoka\Aws\Structures\Sms\GetReplicationJobs;

trait GetReplicationJobsTrait
{
    /**
     * @param GetReplicationJobsRequest $args
     * @return GetReplicationJobsResponse
     */
    public function getReplicationJobs(GetReplicationJobsRequest $args)
    {
        $result = parent::getReplicationJobs($args->toArray());
        return new GetReplicationJobsResponse($result->toArray());
    }
}
