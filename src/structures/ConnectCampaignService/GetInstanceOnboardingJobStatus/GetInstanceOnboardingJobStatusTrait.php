<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\GetInstanceOnboardingJobStatus;

trait GetInstanceOnboardingJobStatusTrait
{
    /**
     * @param GetInstanceOnboardingJobStatusRequest $args
     * @return GetInstanceOnboardingJobStatusResponse
     */
    public function getInstanceOnboardingJobStatus(GetInstanceOnboardingJobStatusRequest $args)
    {
        $result = parent::getInstanceOnboardingJobStatus($args->toArray());
        return new GetInstanceOnboardingJobStatusResponse($result->toArray());
    }
}
