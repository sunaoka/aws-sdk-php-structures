<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\ListRegistrationsFromBrandProfile;

trait ListRegistrationsFromBrandProfileTrait
{
    /**
     * @param ListRegistrationsFromBrandProfileRequest $args
     * @return ListRegistrationsFromBrandProfileResponse
     */
    public function listRegistrationsFromBrandProfile(ListRegistrationsFromBrandProfileRequest $args)
    {
        $result = parent::listRegistrationsFromBrandProfile($args->toArray());
        return new ListRegistrationsFromBrandProfileResponse($result->toArray());
    }
}
