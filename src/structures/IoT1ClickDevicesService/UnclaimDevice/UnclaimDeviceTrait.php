<?php

namespace Sunaoka\Aws\Structures\IoT1ClickDevicesService\UnclaimDevice;

trait UnclaimDeviceTrait
{
    /**
     * @param UnclaimDeviceRequest $args
     * @return UnclaimDeviceResponse
     */
    public function unclaimDevice(UnclaimDeviceRequest $args)
    {
        $result = parent::unclaimDevice($args->toArray());
        return new UnclaimDeviceResponse($result->toArray());
    }
}
