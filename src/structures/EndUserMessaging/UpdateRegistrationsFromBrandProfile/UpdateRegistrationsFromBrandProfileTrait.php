<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\UpdateRegistrationsFromBrandProfile;

trait UpdateRegistrationsFromBrandProfileTrait
{
    /**
     * @param UpdateRegistrationsFromBrandProfileRequest $args
     * @return UpdateRegistrationsFromBrandProfileResponse
     */
    public function updateRegistrationsFromBrandProfile(UpdateRegistrationsFromBrandProfileRequest $args)
    {
        $result = parent::updateRegistrationsFromBrandProfile($args->toArray());
        return new UpdateRegistrationsFromBrandProfileResponse($result->toArray());
    }
}
