<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DeregisterWirelessDevice;

trait DeregisterWirelessDeviceTrait
{
    /**
     * @param DeregisterWirelessDeviceRequest $args
     * @return DeregisterWirelessDeviceResponse
     */
    public function deregisterWirelessDevice(DeregisterWirelessDeviceRequest $args)
    {
        $result = parent::deregisterWirelessDevice($args->toArray());
        return new DeregisterWirelessDeviceResponse($result->toArray());
    }
}
