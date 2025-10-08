<?php

namespace Sunaoka\Aws\Structures\Iam\EnableMFADevice;

trait EnableMFADeviceTrait
{
    /**
     * @param EnableMFADeviceRequest $args
     * @return void
     */
    public function enableMFADevice(EnableMFADeviceRequest $args)
    {
        parent::enableMFADevice($args->toArray());
    }
}
