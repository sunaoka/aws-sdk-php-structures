<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\UpdateBrandProfile;

trait UpdateBrandProfileTrait
{
    /**
     * @param UpdateBrandProfileRequest $args
     * @return UpdateBrandProfileResponse
     */
    public function updateBrandProfile(UpdateBrandProfileRequest $args)
    {
        $result = parent::updateBrandProfile($args->toArray());
        return new UpdateBrandProfileResponse($result->toArray());
    }
}
