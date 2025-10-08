<?php

namespace Sunaoka\Aws\Structures\MediaLive\ClaimDevice;

trait ClaimDeviceTrait
{
    /**
     * @param ClaimDeviceRequest $args
     * @return ClaimDeviceResponse
     */
    public function claimDevice(ClaimDeviceRequest $args)
    {
        $result = parent::claimDevice($args->toArray());
        return new ClaimDeviceResponse($result->toArray());
    }
}
