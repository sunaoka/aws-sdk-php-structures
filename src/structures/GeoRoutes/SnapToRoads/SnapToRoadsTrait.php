<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\SnapToRoads;

trait SnapToRoadsTrait
{
    /**
     * @param SnapToRoadsRequest $args
     * @return SnapToRoadsResponse
     */
    public function snapToRoads(SnapToRoadsRequest $args)
    {
        $result = parent::snapToRoads($args->toArray());
        return new SnapToRoadsResponse($result->toArray());
    }
}
