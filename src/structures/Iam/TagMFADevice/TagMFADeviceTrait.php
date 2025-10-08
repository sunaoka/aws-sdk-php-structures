<?php

namespace Sunaoka\Aws\Structures\Iam\TagMFADevice;

trait TagMFADeviceTrait
{
    /**
     * @param TagMFADeviceRequest $args
     * @return void
     */
    public function tagMFADevice(TagMFADeviceRequest $args)
    {
        parent::tagMFADevice($args->toArray());
    }
}
