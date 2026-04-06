<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295> $RestDuration
 * @property int<0, 4294967295> $ServiceDuration
 * @property int<0, 4294967295> $TravelDuration
 * @property int<0, 4294967295> $WaitDuration
 */
class WaypointOptimizationTimeBreakdown extends Shape
{
    /**
     * @param array{
     *     RestDuration: int<0, 4294967295>,
     *     ServiceDuration: int<0, 4294967295>,
     *     TravelDuration: int<0, 4294967295>,
     *     WaitDuration: int<0, 4294967295>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
