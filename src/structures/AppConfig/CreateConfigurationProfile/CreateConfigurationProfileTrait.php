<?php

namespace Sunaoka\Aws\Structures\AppConfig\CreateConfigurationProfile;

trait CreateConfigurationProfileTrait
{
    /**
     * @param CreateConfigurationProfileRequest $args
     * @return CreateConfigurationProfileResponse
     */
    public function createConfigurationProfile(CreateConfigurationProfileRequest $args)
    {
        $result = parent::createConfigurationProfile($args->toArray());
        return new CreateConfigurationProfileResponse($result->toArray());
    }
}
