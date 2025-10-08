<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateGroupProfile;

trait CreateGroupProfileTrait
{
    /**
     * @param CreateGroupProfileRequest $args
     * @return CreateGroupProfileResponse
     */
    public function createGroupProfile(CreateGroupProfileRequest $args)
    {
        $result = parent::createGroupProfile($args->toArray());
        return new CreateGroupProfileResponse($result->toArray());
    }
}
