<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Countries
 */
class WaypointOptimizationExclusionOptions extends Shape
{
    /**
     * @param array{Countries: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
