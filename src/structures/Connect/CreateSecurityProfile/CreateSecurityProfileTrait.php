<?php

namespace Sunaoka\Aws\Structures\Connect\CreateSecurityProfile;

trait CreateSecurityProfileTrait
{
    /**
     * @param CreateSecurityProfileRequest $args
     * @return CreateSecurityProfileResponse
     */
    public function createSecurityProfile(CreateSecurityProfileRequest $args)
    {
        $result = parent::createSecurityProfile($args->toArray());
        return new CreateSecurityProfileResponse($result->toArray());
    }
}
