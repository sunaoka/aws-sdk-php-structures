<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateConfigurationProfile;

trait UpdateConfigurationProfileTrait
{
    /**
     * @param UpdateConfigurationProfileRequest $args
     * @return UpdateConfigurationProfileResponse
     */
    public function updateConfigurationProfile(UpdateConfigurationProfileRequest $args)
    {
        $result = parent::updateConfigurationProfile($args->toArray());
        return new UpdateConfigurationProfileResponse($result->toArray());
    }
}
