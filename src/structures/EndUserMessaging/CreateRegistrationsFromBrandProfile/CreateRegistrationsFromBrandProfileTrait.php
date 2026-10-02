<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\CreateRegistrationsFromBrandProfile;

trait CreateRegistrationsFromBrandProfileTrait
{
    /**
     * @param CreateRegistrationsFromBrandProfileRequest $args
     * @return CreateRegistrationsFromBrandProfileResponse
     */
    public function createRegistrationsFromBrandProfile(CreateRegistrationsFromBrandProfileRequest $args)
    {
        $result = parent::createRegistrationsFromBrandProfile($args->toArray());
        return new CreateRegistrationsFromBrandProfileResponse($result->toArray());
    }
}
