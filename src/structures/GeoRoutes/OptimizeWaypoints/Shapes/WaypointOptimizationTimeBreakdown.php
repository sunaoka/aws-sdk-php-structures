<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $RestDuration
 * @property int $ServiceDuration
 * @property int $TravelDuration
 * @property int $WaitDuration
 */
class WaypointOptimizationTimeBreakdown extends Shape
{
    /**
     * @param array{
     *     RestDuration: int,
     *     ServiceDuration: int,
     *     TravelDuration: int,
     *     WaitDuration: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
