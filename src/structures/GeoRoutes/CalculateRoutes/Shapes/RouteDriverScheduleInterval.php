<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DriveDuration
 * @property int $RestDuration
 */
class RouteDriverScheduleInterval extends Shape
{
    /**
     * @param array{
     *     DriveDuration: int,
     *     RestDuration: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
