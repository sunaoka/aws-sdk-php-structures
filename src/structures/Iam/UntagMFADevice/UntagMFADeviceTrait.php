<?php

namespace Sunaoka\Aws\Structures\Iam\UntagMFADevice;

trait UntagMFADeviceTrait
{
    /**
     * @param UntagMFADeviceRequest $args
     * @return void
     */
    public function untagMFADevice(UntagMFADeviceRequest $args)
    {
        parent::untagMFADevice($args->toArray());
    }
}
