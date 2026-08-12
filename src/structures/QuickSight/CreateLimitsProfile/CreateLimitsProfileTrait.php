<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateLimitsProfile;

trait CreateLimitsProfileTrait
{
    /**
     * @param CreateLimitsProfileRequest $args
     * @return CreateLimitsProfileResponse
     */
    public function createLimitsProfile(CreateLimitsProfileRequest $args)
    {
        $result = parent::createLimitsProfile($args->toArray());
        return new CreateLimitsProfileResponse($result->toArray());
    }
}
