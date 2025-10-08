<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints;

trait OptimizeWaypointsTrait
{
    /**
     * @param OptimizeWaypointsRequest $args
     * @return OptimizeWaypointsResponse
     */
    public function optimizeWaypoints(OptimizeWaypointsRequest $args)
    {
        $result = parent::optimizeWaypoints($args->toArray());
        return new OptimizeWaypointsResponse($result->toArray());
    }
}
