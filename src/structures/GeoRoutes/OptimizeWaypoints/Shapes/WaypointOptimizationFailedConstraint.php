<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AccessHours'|'AppointmentTime'|'Before'|'Heading'|'ServiceDuration'|'SideOfStreet'|null $Constraint
 * @property string|null $Reason
 */
class WaypointOptimizationFailedConstraint extends Shape
{
    /**
     * @param array{
     *     Constraint?: 'AccessHours'|'AppointmentTime'|'Before'|'Heading'|'ServiceDuration'|'SideOfStreet'|null,
     *     Reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
