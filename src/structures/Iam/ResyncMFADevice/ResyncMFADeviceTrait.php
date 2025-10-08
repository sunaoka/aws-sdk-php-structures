<?php

namespace Sunaoka\Aws\Structures\Iam\ResyncMFADevice;

trait ResyncMFADeviceTrait
{
    /**
     * @param ResyncMFADeviceRequest $args
     * @return void
     */
    public function resyncMFADevice(ResyncMFADeviceRequest $args)
    {
        parent::resyncMFADevice($args->toArray());
    }
}
