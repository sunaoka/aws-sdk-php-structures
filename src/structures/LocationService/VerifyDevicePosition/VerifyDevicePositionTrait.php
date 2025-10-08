<?php

namespace Sunaoka\Aws\Structures\LocationService\VerifyDevicePosition;

trait VerifyDevicePositionTrait
{
    /**
     * @param VerifyDevicePositionRequest $args
     * @return VerifyDevicePositionResponse
     */
    public function verifyDevicePosition(VerifyDevicePositionRequest $args)
    {
        $result = parent::verifyDevicePosition($args->toArray());
        return new VerifyDevicePositionResponse($result->toArray());
    }
}
