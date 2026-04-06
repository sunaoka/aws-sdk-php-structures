<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Profile
 */
class WaypointOptimizationRestProfile extends Shape
{
    /**
     * @param array{Profile: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
