<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PollForThirdPartyJobs;

trait PollForThirdPartyJobsTrait
{
    /**
     * @param PollForThirdPartyJobsRequest $args
     * @return PollForThirdPartyJobsResponse
     */
    public function pollForThirdPartyJobs(PollForThirdPartyJobsRequest $args)
    {
        $result = parent::pollForThirdPartyJobs($args->toArray());
        return new PollForThirdPartyJobsResponse($result->toArray());
    }
}
