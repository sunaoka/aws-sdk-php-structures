<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WaypointOptimizationAccessHours $AccessHours
 * @property string $AppointmentTime
 * @property double $Heading
 * @property string $Id
 * @property int $ServiceDuration
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
     *     ServiceDuration?: int,
     *     SideOfStreet?: WaypointOptimizationSideOfStreetOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
