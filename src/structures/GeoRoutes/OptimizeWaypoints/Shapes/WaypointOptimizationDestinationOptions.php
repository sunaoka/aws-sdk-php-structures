<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WaypointOptimizationAccessHours $AccessHours
 * @property string $AppointmentTime
 * @property double $Heading
 * @property string $Id
 * @property int<0, 4294967295> $ServiceDuration
 * @property WaypointOptimizationSideOfStreetOptions $SideOfStreet
 */
class WaypointOptimizationDestinationOptions extends Shape
{
    /**
     * @param array{
     *     AccessHours?: WaypointOptimizationAccessHours,
     *     AppointmentTime?: string,
     *     Heading?: double,
     *     Id?: string,
     *     ServiceDuration?: int<0, 4294967295>,
     *     SideOfStreet?: WaypointOptimizationSideOfStreetOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
