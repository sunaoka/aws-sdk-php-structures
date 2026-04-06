<?php

namespace Sunaoka\Aws\Structures\IoT1ClickDevicesService\ClaimDevicesByClaimCode;

trait ClaimDevicesByClaimCodeTrait
{
    /**
     * @param ClaimDevicesByClaimCodeRequest $args
     * @return ClaimDevicesByClaimCodeResponse
     */
    public function claimDevicesByClaimCode(ClaimDevicesByClaimCodeRequest $args)
    {
        $result = parent::claimDevicesByClaimCode($args->toArray());
        return new ClaimDevicesByClaimCodeResponse($result->toArray());
    }
}
