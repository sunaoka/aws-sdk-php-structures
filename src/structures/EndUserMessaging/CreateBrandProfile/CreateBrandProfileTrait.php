<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\CreateBrandProfile;

trait CreateBrandProfileTrait
{
    /**
     * @param CreateBrandProfileRequest $args
     * @return CreateBrandProfileResponse
     */
    public function createBrandProfile(CreateBrandProfileRequest $args)
    {
        $result = parent::createBrandProfile($args->toArray());
        return new CreateBrandProfileResponse($result->toArray());
    }
}
