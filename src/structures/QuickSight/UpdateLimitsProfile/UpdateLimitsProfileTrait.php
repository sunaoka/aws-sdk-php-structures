<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateLimitsProfile;

trait UpdateLimitsProfileTrait
{
    /**
     * @param UpdateLimitsProfileRequest $args
     * @return UpdateLimitsProfileResponse
     */
    public function updateLimitsProfile(UpdateLimitsProfileRequest $args)
    {
        $result = parent::updateLimitsProfile($args->toArray());
        return new UpdateLimitsProfileResponse($result->toArray());
    }
}
