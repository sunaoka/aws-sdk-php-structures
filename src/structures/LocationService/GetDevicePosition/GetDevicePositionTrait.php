<?php

namespace Sunaoka\Aws\Structures\LocationService\GetDevicePosition;

trait GetDevicePositionTrait
{
    /**
     * @param GetDevicePositionRequest $args
     * @return GetDevicePositionResponse
     */
    public function getDevicePosition(GetDevicePositionRequest $args)
    {
        $result = parent::getDevicePosition($args->toArray());
        return new GetDevicePositionResponse($result->toArray());
    }
}
