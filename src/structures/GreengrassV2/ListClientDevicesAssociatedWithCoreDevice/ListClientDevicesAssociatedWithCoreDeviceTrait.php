<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListClientDevicesAssociatedWithCoreDevice;

trait ListClientDevicesAssociatedWithCoreDeviceTrait
{
    /**
     * @param ListClientDevicesAssociatedWithCoreDeviceRequest $args
     * @return ListClientDevicesAssociatedWithCoreDeviceResponse
     */
    public function listClientDevicesAssociatedWithCoreDevice(ListClientDevicesAssociatedWithCoreDeviceRequest $args)
    {
        $result = parent::listClientDevicesAssociatedWithCoreDevice($args->toArray());
        return new ListClientDevicesAssociatedWithCoreDeviceResponse($result->toArray());
    }
}
