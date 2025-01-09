<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IgnoreTrafficData'|'UseTrafficData' $Usage
 */
class WaypointOptimizationTrafficOptions extends Shape
{
    /**
     * @param array{Usage?: 'IgnoreTrafficData'|'UseTrafficData'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
