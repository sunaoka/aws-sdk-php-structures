<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IgnoreTrafficData'|'UseTrafficData'|null $Usage
 */
class WaypointOptimizationTrafficOptions extends Shape
{
    /**
     * @param array{Usage?: 'IgnoreTrafficData'|'UseTrafficData'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
