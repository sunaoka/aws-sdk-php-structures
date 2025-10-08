<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListDevices;

trait ListDevicesTrait
{
    /**
     * @param ListDevicesRequest $args
     * @return ListDevicesResponse
     */
    public function listDevices(ListDevicesRequest $args)
    {
        $result = parent::listDevices($args->toArray());
        return new ListDevicesResponse($result->toArray());
    }
}
