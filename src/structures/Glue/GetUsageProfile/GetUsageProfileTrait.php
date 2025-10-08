<?php

namespace Sunaoka\Aws\Structures\Glue\GetUsageProfile;

trait GetUsageProfileTrait
{
    /**
     * @param GetUsageProfileRequest $args
     * @return GetUsageProfileResponse
     */
    public function getUsageProfile(GetUsageProfileRequest $args)
    {
        $result = parent::getUsageProfile($args->toArray());
        return new GetUsageProfileResponse($result->toArray());
    }
}
