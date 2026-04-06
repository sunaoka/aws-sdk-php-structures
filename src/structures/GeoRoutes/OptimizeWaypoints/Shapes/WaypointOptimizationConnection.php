<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295> $Distance
 * @property string $From
 * @property int<0, 4294967295> $RestDuration
 * @property string $To
 * @property int<0, 4294967295> $TravelDuration
 * @property int<0, 4294967295> $WaitDuration
 */
class WaypointOptimizationConnection extends Shape
{
    /**
     * @param array{
     *     Distance: int<0, 4294967295>,
     *     From: string,
     *     RestDuration: int<0, 4294967295>,
     *     To: string,
     *     TravelDuration: int<0, 4294967295>,
     *     WaitDuration: int<0, 4294967295>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
