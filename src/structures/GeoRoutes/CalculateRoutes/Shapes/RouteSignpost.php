<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RouteSignpostLabel> $Labels
 */
class RouteSignpost extends Shape
{
    /**
     * @param array{Labels: list<RouteSignpostLabel>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
