<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetIdentityResolutionJob;

trait GetIdentityResolutionJobTrait
{
    /**
     * @param GetIdentityResolutionJobRequest $args
     * @return GetIdentityResolutionJobResponse
     */
    public function getIdentityResolutionJob(GetIdentityResolutionJobRequest $args)
    {
        $result = parent::getIdentityResolutionJob($args->toArray());
        return new GetIdentityResolutionJobResponse($result->toArray());
    }
}
