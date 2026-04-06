<?php

namespace Sunaoka\Aws\Structures\IoT1ClickDevicesService\FinalizeDeviceClaim;

trait FinalizeDeviceClaimTrait
{
    /**
     * @param FinalizeDeviceClaimRequest $args
     * @return FinalizeDeviceClaimResponse
     */
    public function finalizeDeviceClaim(FinalizeDeviceClaimRequest $args)
    {
        $result = parent::finalizeDeviceClaim($args->toArray());
        return new FinalizeDeviceClaimResponse($result->toArray());
    }
}
