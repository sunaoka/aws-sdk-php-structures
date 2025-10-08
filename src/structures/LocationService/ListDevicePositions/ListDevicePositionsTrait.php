<?php

namespace Sunaoka\Aws\Structures\LocationService\ListDevicePositions;

trait ListDevicePositionsTrait
{
    /**
     * @param ListDevicePositionsRequest $args
     * @return ListDevicePositionsResponse
     */
    public function listDevicePositions(ListDevicePositionsRequest $args)
    {
        $result = parent::listDevicePositions($args->toArray());
        return new ListDevicePositionsResponse($result->toArray());
    }
}
