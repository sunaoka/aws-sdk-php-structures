<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetDeviceInstance;

trait GetDeviceInstanceTrait
{
    /**
     * @param GetDeviceInstanceRequest $args
     * @return GetDeviceInstanceResponse
     */
    public function getDeviceInstance(GetDeviceInstanceRequest $args)
    {
        $result = parent::getDeviceInstance($args->toArray());
        return new GetDeviceInstanceResponse($result->toArray());
    }
}
