<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateWirelessDevice;

trait UpdateWirelessDeviceTrait
{
    /**
     * @param UpdateWirelessDeviceRequest $args
     * @return UpdateWirelessDeviceResponse
     */
    public function updateWirelessDevice(UpdateWirelessDeviceRequest $args)
    {
        $result = parent::updateWirelessDevice($args->toArray());
        return new UpdateWirelessDeviceResponse($result->toArray());
    }
}
