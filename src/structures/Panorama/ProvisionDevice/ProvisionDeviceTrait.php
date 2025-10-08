<?php

namespace Sunaoka\Aws\Structures\Panorama\ProvisionDevice;

trait ProvisionDeviceTrait
{
    /**
     * @param ProvisionDeviceRequest $args
     * @return ProvisionDeviceResponse
     */
    public function provisionDevice(ProvisionDeviceRequest $args)
    {
        $result = parent::provisionDevice($args->toArray());
        return new ProvisionDeviceResponse($result->toArray());
    }
}
