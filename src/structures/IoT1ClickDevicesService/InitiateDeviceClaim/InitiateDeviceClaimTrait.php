<?php

namespace Sunaoka\Aws\Structures\IoT1ClickDevicesService\InitiateDeviceClaim;

trait InitiateDeviceClaimTrait
{
    /**
     * @param InitiateDeviceClaimRequest $args
     * @return InitiateDeviceClaimResponse
     */
    public function initiateDeviceClaim(InitiateDeviceClaimRequest $args)
    {
        $result = parent::initiateDeviceClaim($args->toArray());
        return new InitiateDeviceClaimResponse($result->toArray());
    }
}
