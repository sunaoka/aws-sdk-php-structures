<?php

namespace Sunaoka\Aws\Structures\Iam\DeactivateMFADevice;

trait DeactivateMFADeviceTrait
{
    /**
     * @param DeactivateMFADeviceRequest $args
     * @return void
     */
    public function deactivateMFADevice(DeactivateMFADeviceRequest $args)
    {
        parent::deactivateMFADevice($args->toArray());
    }
}
