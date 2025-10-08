<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\DeleteInstanceOnboardingJob;

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
