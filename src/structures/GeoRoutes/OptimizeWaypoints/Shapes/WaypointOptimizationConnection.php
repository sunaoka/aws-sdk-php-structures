<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Distance
 * @property string $From
 * @property int $RestDuration
 * @property string $To
 * @property int $TravelDuration
 * @property int $WaitDuration
 */
class WaypointOptimizationConnection extends Shape
{
    /**
     * @param array{
     *     Distance: int,
     *     From: string,
     *     RestDuration: int,
     *     To: string,
     *     TravelDuration: int,
     *     WaitDuration: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
