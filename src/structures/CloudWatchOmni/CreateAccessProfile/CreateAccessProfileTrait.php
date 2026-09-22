<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\CreateAccessProfile;

trait CreateAccessProfileTrait
{
    /**
     * @param CreateAccessProfileRequest $args
     * @return CreateAccessProfileResponse
     */
    public function createAccessProfile(CreateAccessProfileRequest $args)
    {
        $result = parent::createAccessProfile($args->toArray());
        return new CreateAccessProfileResponse($result->toArray());
    }
}
