<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RouteDriverScheduleInterval>|null $Schedule
 */
class RouteDriverOptions extends Shape
{
    /**
     * @param array{Schedule?: list<RouteDriverScheduleInterval>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
