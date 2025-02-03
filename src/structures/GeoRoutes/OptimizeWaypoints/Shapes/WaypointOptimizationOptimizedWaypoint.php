<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ArrivalTime
 * @property int<0, max>|null $ClusterIndex
 * @property string $DepartureTime
 * @property string $Id
 * @property list<double> $Position
 */
class WaypointOptimizationOptimizedWaypoint extends Shape
{
    /**
     * @param array{
     *     ArrivalTime?: string|null,
     *     ClusterIndex?: int<0, max>|null,
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
