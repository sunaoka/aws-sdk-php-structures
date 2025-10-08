<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListUploadJobs;

trait ListUploadJobsTrait
{
    /**
     * @param ListUploadJobsRequest $args
     * @return ListUploadJobsResponse
     */
    public function listUploadJobs(ListUploadJobsRequest $args)
    {
        $result = parent::listUploadJobs($args->toArray());
        return new ListUploadJobsResponse($result->toArray());
    }
}
