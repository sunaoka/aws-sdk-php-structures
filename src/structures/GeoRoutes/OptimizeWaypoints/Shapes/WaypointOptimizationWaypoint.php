<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WaypointOptimizationAccessHours|null $AccessHours
 * @property string|null $AppointmentTime
 * @property list<int>|null $Before
 * @property double|null $Heading
 * @property string|null $Id
 * @property list<double> $Position
 * @property int<0, 4294967295>|null $ServiceDuration
 * @property WaypointOptimizationSideOfStreetOptions|null $SideOfStreet
 */
class WaypointOptimizationWaypoint extends Shape
{
    /**
     * @param array{
     *     AccessHours?: WaypointOptimizationAccessHours|null,
     *     AppointmentTime?: string|null,
     *     Before?: list<int>|null,
     *     Heading?: double|null,
     *     Id?: string|null,
     *     Position: list<double>,
     *     ServiceDuration?: int<0, 4294967295>|null,
     *     SideOfStreet?: WaypointOptimizationSideOfStreetOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
