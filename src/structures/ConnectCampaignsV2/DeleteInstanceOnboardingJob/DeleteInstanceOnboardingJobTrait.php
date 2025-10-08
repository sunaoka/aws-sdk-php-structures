<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DeleteInstanceOnboardingJob;

trait DeleteInstanceOnboardingJobTrait
{
    /**
     * @param DeleteInstanceOnboardingJobRequest $args
     * @return void
     */
    public function deleteInstanceOnboardingJob(DeleteInstanceOnboardingJobRequest $args)
    {
        parent::deleteInstanceOnboardingJob($args->toArray());
    }
}
