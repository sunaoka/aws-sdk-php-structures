<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $RestDuration
 * @property int $WorkDuration
 */
class WaypointOptimizationRestCycleDurations extends Shape
{
    /**
     * @param array{
     *     RestDuration: int,
     *     WorkDuration: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
