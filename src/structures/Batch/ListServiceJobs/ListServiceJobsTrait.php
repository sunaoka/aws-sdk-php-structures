<?php

namespace Sunaoka\Aws\Structures\Batch\ListServiceJobs;

trait ListServiceJobsTrait
{
    /**
     * @param ListServiceJobsRequest $args
     * @return ListServiceJobsResponse
     */
    public function listServiceJobs(ListServiceJobsRequest $args)
    {
        $result = parent::listServiceJobs($args->toArray());
        return new ListServiceJobsResponse($result->toArray());
    }
}
