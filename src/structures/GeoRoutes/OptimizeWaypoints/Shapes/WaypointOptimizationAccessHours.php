<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WaypointOptimizationAccessHoursEntry $From
 * @property WaypointOptimizationAccessHoursEntry $To
 */
class WaypointOptimizationAccessHours extends Shape
{
    /**
     * @param array{
     *     From: WaypointOptimizationAccessHoursEntry,
     *     To: WaypointOptimizationAccessHoursEntry
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
