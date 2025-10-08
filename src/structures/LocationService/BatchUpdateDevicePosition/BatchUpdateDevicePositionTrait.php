<?php

namespace Sunaoka\Aws\Structures\LocationService\BatchUpdateDevicePosition;

trait BatchUpdateDevicePositionTrait
{
    /**
     * @param BatchUpdateDevicePositionRequest $args
     * @return BatchUpdateDevicePositionResponse
     */
    public function batchUpdateDevicePosition(BatchUpdateDevicePositionRequest $args)
    {
        $result = parent::batchUpdateDevicePosition($args->toArray());
        return new BatchUpdateDevicePositionResponse($result->toArray());
    }
}
