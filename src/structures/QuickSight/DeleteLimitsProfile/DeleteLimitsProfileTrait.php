<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteLimitsProfile;

trait DeleteLimitsProfileTrait
{
    /**
     * @param DeleteLimitsProfileRequest $args
     * @return DeleteLimitsProfileResponse
     */
    public function deleteLimitsProfile(DeleteLimitsProfileRequest $args)
    {
        $result = parent::deleteLimitsProfile($args->toArray());
        return new DeleteLimitsProfileResponse($result->toArray());
    }
}
