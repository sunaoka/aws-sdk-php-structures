<?php

namespace Sunaoka\Aws\Structures\Iam\CreateVirtualMFADevice;

trait CreateVirtualMFADeviceTrait
{
    /**
     * @param CreateVirtualMFADeviceRequest $args
     * @return CreateVirtualMFADeviceResponse
     */
    public function createVirtualMFADevice(CreateVirtualMFADeviceRequest $args)
    {
        $result = parent::createVirtualMFADevice($args->toArray());
        return new CreateVirtualMFADeviceResponse($result->toArray());
    }
}
