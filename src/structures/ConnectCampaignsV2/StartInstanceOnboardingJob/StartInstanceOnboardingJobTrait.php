<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\StartInstanceOnboardingJob;

trait StartInstanceOnboardingJobTrait
{
    /**
     * @param StartInstanceOnboardingJobRequest $args
     * @return StartInstanceOnboardingJobResponse
     */
    public function startInstanceOnboardingJob(StartInstanceOnboardingJobRequest $args)
    {
        $result = parent::startInstanceOnboardingJob($args->toArray());
        return new StartInstanceOnboardingJobResponse($result->toArray());
    }
}
