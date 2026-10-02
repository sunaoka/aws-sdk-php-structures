<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\GetBrandProfile;

trait GetBrandProfileTrait
{
    /**
     * @param GetBrandProfileRequest $args
     * @return GetBrandProfileResponse
     */
    public function getBrandProfile(GetBrandProfileRequest $args)
    {
        $result = parent::getBrandProfile($args->toArray());
        return new GetBrandProfileResponse($result->toArray());
    }
}
