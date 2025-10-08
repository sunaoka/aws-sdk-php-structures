<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\DeleteCoreDevice;

trait DeleteCoreDeviceTrait
{
    /**
     * @param DeleteCoreDeviceRequest $args
     * @return void
     */
    public function deleteCoreDevice(DeleteCoreDeviceRequest $args)
    {
        parent::deleteCoreDevice($args->toArray());
    }
}
