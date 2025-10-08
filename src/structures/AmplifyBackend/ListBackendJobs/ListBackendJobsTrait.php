<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\ListBackendJobs;

trait ListBackendJobsTrait
{
    /**
     * @param ListBackendJobsRequest $args
     * @return ListBackendJobsResponse
     */
    public function listBackendJobs(ListBackendJobsRequest $args)
    {
        $result = parent::listBackendJobs($args->toArray());
        return new ListBackendJobsResponse($result->toArray());
    }
}
