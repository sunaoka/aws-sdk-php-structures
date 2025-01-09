<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<WaypointOptimizationFailedConstraint> $FailedConstraints
 * @property string $Id
 * @property list<double> $Position
 */
class WaypointOptimizationImpedingWaypoint extends Shape
{
    /**
     * @param array{
     *     FailedConstraints: list<WaypointOptimizationFailedConstraint>,
     *     Id: string,
     *     Position: list<double>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
