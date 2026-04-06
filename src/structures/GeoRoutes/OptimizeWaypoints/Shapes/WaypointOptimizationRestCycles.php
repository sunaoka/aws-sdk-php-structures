<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WaypointOptimizationRestCycleDurations $LongCycle
 * @property WaypointOptimizationRestCycleDurations $ShortCycle
 */
class WaypointOptimizationRestCycles extends Shape
{
    /**
     * @param array{
     *     LongCycle: WaypointOptimizationRestCycleDurations,
     *     ShortCycle: WaypointOptimizationRestCycleDurations
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
