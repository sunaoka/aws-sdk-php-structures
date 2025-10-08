<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateDeviceStatus;

trait UpdateDeviceStatusTrait
{
    /**
     * @param UpdateDeviceStatusRequest $args
     * @return UpdateDeviceStatusResponse
     */
    public function updateDeviceStatus(UpdateDeviceStatusRequest $args)
    {
        $result = parent::updateDeviceStatus($args->toArray());
        return new UpdateDeviceStatusResponse($result->toArray());
    }
}
