<?php

namespace Sunaoka\Aws\Structures\Iam\CreateLoginProfile;

trait CreateLoginProfileTrait
{
    /**
     * @param CreateLoginProfileRequest $args
     * @return CreateLoginProfileResponse
     */
    public function createLoginProfile(CreateLoginProfileRequest $args)
    {
        $result = parent::createLoginProfile($args->toArray());
        return new CreateLoginProfileResponse($result->toArray());
    }
}
