<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DrivingDistance'|'TopologySegment' $Algorithm
 * @property WaypointOptimizationDrivingDistanceOptions|null $DrivingDistanceOptions
 */
class WaypointOptimizationClusteringOptions extends Shape
{
    /**
     * @param array{
     *     Algorithm: 'DrivingDistance'|'TopologySegment',
     *     DrivingDistanceOptions?: WaypointOptimizationDrivingDistanceOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
