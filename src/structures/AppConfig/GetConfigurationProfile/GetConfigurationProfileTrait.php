<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetConfigurationProfile;

trait GetConfigurationProfileTrait
{
    /**
     * @param GetConfigurationProfileRequest $args
     * @return GetConfigurationProfileResponse
     */
    public function getConfigurationProfile(GetConfigurationProfileRequest $args)
    {
        $result = parent::getConfigurationProfile($args->toArray());
        return new GetConfigurationProfileResponse($result->toArray());
    }
}
