<?php

namespace Sunaoka\Aws\Structures\Odb\GetOciOnboardingStatus;

trait GetOciOnboardingStatusTrait
{
    /**
     * @param GetOciOnboardingStatusRequest $args
     * @return GetOciOnboardingStatusResponse
     */
    public function getOciOnboardingStatus(GetOciOnboardingStatusRequest $args)
    {
        $result = parent::getOciOnboardingStatus($args->toArray());
        return new GetOciOnboardingStatusResponse($result->toArray());
    }
}
