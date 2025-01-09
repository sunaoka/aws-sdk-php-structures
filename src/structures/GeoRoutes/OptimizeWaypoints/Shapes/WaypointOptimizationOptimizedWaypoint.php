<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ArrivalTime
 * @property string $DepartureTime
 * @property string $Id
 * @property list<double> $Position
 */
class WaypointOptimizationOptimizedWaypoint extends Shape
{
    /**
     * @param array{
     *     ArrivalTime?: string,
     *     DepartureTime: string,
     *     Id: string,
     *     Position: list<double>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
