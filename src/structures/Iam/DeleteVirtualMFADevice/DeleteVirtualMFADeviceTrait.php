<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteVirtualMFADevice;

trait DeleteVirtualMFADeviceTrait
{
    /**
     * @param DeleteVirtualMFADeviceRequest $args
     * @return void
     */
    public function deleteVirtualMFADevice(DeleteVirtualMFADeviceRequest $args)
    {
        parent::deleteVirtualMFADevice($args->toArray());
    }
}
