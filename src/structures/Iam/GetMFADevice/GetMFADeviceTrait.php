<?php

namespace Sunaoka\Aws\Structures\Iam\GetMFADevice;

trait GetMFADeviceTrait
{
    /**
     * @param GetMFADeviceRequest $args
     * @return GetMFADeviceResponse
     */
    public function getMFADevice(GetMFADeviceRequest $args)
    {
        $result = parent::getMFADevice($args->toArray());
        return new GetMFADeviceResponse($result->toArray());
    }
}
