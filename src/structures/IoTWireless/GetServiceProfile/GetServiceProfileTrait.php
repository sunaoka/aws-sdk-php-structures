<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetServiceProfile;

trait GetServiceProfileTrait
{
    /**
     * @param GetServiceProfileRequest $args
     * @return GetServiceProfileResponse
     */
    public function getServiceProfile(GetServiceProfileRequest $args)
    {
        $result = parent::getServiceProfile($args->toArray());
        return new GetServiceProfileResponse($result->toArray());
    }
}
