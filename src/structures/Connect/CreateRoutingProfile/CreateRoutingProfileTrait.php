<?php

namespace Sunaoka\Aws\Structures\Connect\CreateRoutingProfile;

trait CreateRoutingProfileTrait
{
    /**
     * @param CreateRoutingProfileRequest $args
     * @return CreateRoutingProfileResponse
     */
    public function createRoutingProfile(CreateRoutingProfileRequest $args)
    {
        $result = parent::createRoutingProfile($args->toArray());
        return new CreateRoutingProfileResponse($result->toArray());
    }
}
