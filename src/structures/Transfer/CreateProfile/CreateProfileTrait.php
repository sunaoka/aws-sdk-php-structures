<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateProfile;

trait CreateProfileTrait
{
    /**
     * @param CreateProfileRequest $args
     * @return CreateProfileResponse
     */
    public function createProfile(CreateProfileRequest $args)
    {
        $result = parent::createProfile($args->toArray());
        return new CreateProfileResponse($result->toArray());
    }
}
