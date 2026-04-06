<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295> $RestDuration
 * @property int<0, 4294967295> $WorkDuration
 */
class WaypointOptimizationRestCycleDurations extends Shape
{
    /**
     * @param array{
     *     RestDuration: int<0, 4294967295>,
     *     WorkDuration: int<0, 4294967295>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
