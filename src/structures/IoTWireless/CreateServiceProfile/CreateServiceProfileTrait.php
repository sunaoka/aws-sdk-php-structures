<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateServiceProfile;

trait CreateServiceProfileTrait
{
    /**
     * @param CreateServiceProfileRequest $args
     * @return CreateServiceProfileResponse
     */
    public function createServiceProfile(CreateServiceProfileRequest $args)
    {
        $result = parent::createServiceProfile($args->toArray());
        return new CreateServiceProfileResponse($result->toArray());
    }
}
