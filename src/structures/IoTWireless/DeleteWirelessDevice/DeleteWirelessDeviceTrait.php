<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DeleteWirelessDevice;

trait DeleteWirelessDeviceTrait
{
    /**
     * @param DeleteWirelessDeviceRequest $args
     * @return DeleteWirelessDeviceResponse
     */
    public function deleteWirelessDevice(DeleteWirelessDeviceRequest $args)
    {
        $result = parent::deleteWirelessDevice($args->toArray());
        return new DeleteWirelessDeviceResponse($result->toArray());
    }
}
