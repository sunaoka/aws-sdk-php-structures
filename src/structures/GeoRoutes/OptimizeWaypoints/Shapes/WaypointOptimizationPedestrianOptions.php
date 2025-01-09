<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Speed
 */
class WaypointOptimizationPedestrianOptions extends Shape
{
    /**
     * @param array{Speed?: double} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
