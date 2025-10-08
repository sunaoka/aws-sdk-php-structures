<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateWirelessDevice;

trait CreateWirelessDeviceTrait
{
    /**
     * @param CreateWirelessDeviceRequest $args
     * @return CreateWirelessDeviceResponse
     */
    public function createWirelessDevice(CreateWirelessDeviceRequest $args)
    {
        $result = parent::createWirelessDevice($args->toArray());
        return new CreateWirelessDeviceResponse($result->toArray());
    }
}
