<?php

namespace Sunaoka\Aws\Structures\LocationService\BatchGetDevicePosition;

trait BatchGetDevicePositionTrait
{
    /**
     * @param BatchGetDevicePositionRequest $args
     * @return BatchGetDevicePositionResponse
     */
    public function batchGetDevicePosition(BatchGetDevicePositionRequest $args)
    {
        $result = parent::batchGetDevicePosition($args->toArray());
        return new BatchGetDevicePositionResponse($result->toArray());
    }
}
