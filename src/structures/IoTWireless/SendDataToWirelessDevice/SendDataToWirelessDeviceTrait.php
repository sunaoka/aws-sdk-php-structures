<?php

namespace Sunaoka\Aws\Structures\IoTWireless\SendDataToWirelessDevice;

trait SendDataToWirelessDeviceTrait
{
    /**
     * @param SendDataToWirelessDeviceRequest $args
     * @return SendDataToWirelessDeviceResponse
     */
    public function sendDataToWirelessDevice(SendDataToWirelessDeviceRequest $args)
    {
        $result = parent::sendDataToWirelessDevice($args->toArray());
        return new SendDataToWirelessDeviceResponse($result->toArray());
    }
}
