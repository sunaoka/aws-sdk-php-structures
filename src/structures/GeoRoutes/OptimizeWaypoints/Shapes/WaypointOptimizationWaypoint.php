<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WaypointOptimizationAccessHours $AccessHours
 * @property string $AppointmentTime
 * @property list<int> $Before
 * @property double $Heading
 * @property string $Id
 * @property list<double> $Position
 * @property int<0, 4294967295> $ServiceDuration
 * @property WaypointOptimizationSideOfStreetOptions $SideOfStreet
 */
class WaypointOptimizationWaypoint extends Shape
{
    /**
     * @param array{
     *     AccessHours?: WaypointOptimizationAccessHours,
     *     AppointmentTime?: string,
     *     Before?: list<int>,
     *     Heading?: double,
     *     Id?: string,
     *     Position: list<double>,
     *     ServiceDuration?: int<0, 4294967295>,
     *     SideOfStreet?: WaypointOptimizationSideOfStreetOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
