<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDevice;

trait GetWirelessDeviceTrait
{
    /**
     * @param GetWirelessDeviceRequest $args
     * @return GetWirelessDeviceResponse
     */
    public function getWirelessDevice(GetWirelessDeviceRequest $args)
    {
        $result = parent::getWirelessDevice($args->toArray());
        return new GetWirelessDeviceResponse($result->toArray());
    }
}
