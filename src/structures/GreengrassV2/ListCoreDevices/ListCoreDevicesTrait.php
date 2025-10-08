<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListCoreDevices;

trait ListCoreDevicesTrait
{
    /**
     * @param ListCoreDevicesRequest $args
     * @return ListCoreDevicesResponse
     */
    public function listCoreDevices(ListCoreDevicesRequest $args)
    {
        $result = parent::listCoreDevices($args->toArray());
        return new ListCoreDevicesResponse($result->toArray());
    }
}
