<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListIdentityResolutionJobs;

trait ListIdentityResolutionJobsTrait
{
    /**
     * @param ListIdentityResolutionJobsRequest $args
     * @return ListIdentityResolutionJobsResponse
     */
    public function listIdentityResolutionJobs(ListIdentityResolutionJobsRequest $args)
    {
        $result = parent::listIdentityResolutionJobs($args->toArray());
        return new ListIdentityResolutionJobsResponse($result->toArray());
    }
}
