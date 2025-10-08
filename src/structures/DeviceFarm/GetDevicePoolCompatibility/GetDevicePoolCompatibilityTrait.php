<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetDevicePoolCompatibility;

trait GetDevicePoolCompatibilityTrait
{
    /**
     * @param GetDevicePoolCompatibilityRequest $args
     * @return GetDevicePoolCompatibilityResponse
     */
    public function getDevicePoolCompatibility(GetDevicePoolCompatibilityRequest $args)
    {
        $result = parent::getDevicePoolCompatibility($args->toArray());
        return new GetDevicePoolCompatibilityResponse($result->toArray());
    }
}
