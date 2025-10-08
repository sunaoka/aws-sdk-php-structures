<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetDevices;

trait GetDevicesTrait
{
    /**
     * @param GetDevicesRequest $args
     * @return GetDevicesResponse
     */
    public function getDevices(GetDevicesRequest $args)
    {
        $result = parent::getDevices($args->toArray());
        return new GetDevicesResponse($result->toArray());
    }
}
