<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295> $DriveDuration
 * @property int<0, 4294967295> $RestDuration
 */
class RouteDriverScheduleInterval extends Shape
{
    /**
     * @param array{
     *     DriveDuration: int<0, 4294967295>,
     *     RestDuration: int<0, 4294967295>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
