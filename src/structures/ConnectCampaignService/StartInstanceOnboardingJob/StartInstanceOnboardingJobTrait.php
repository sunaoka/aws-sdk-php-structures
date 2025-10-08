<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\StartInstanceOnboardingJob;

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
