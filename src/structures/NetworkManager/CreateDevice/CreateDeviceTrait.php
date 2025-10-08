<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateDevice;

trait CreateDeviceTrait
{
    /**
     * @param CreateDeviceRequest $args
     * @return CreateDeviceResponse
     */
    public function createDevice(CreateDeviceRequest $args)
    {
        $result = parent::createDevice($args->toArray());
        return new CreateDeviceResponse($result->toArray());
    }
}
