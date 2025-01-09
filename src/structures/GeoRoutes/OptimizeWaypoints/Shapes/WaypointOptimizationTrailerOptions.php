<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 255> $TrailerCount
 */
class WaypointOptimizationTrailerOptions extends Shape
{
    /**
     * @param array{TrailerCount?: int<0, 255>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
