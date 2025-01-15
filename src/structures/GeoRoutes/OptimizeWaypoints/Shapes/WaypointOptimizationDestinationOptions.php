<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WaypointOptimizationAccessHours|null $AccessHours
 * @property string|null $AppointmentTime
 * @property double|null $Heading
 * @property string|null $Id
 * @property int<0, 4294967295>|null $ServiceDuration
 * @property WaypointOptimizationSideOfStreetOptions|null $SideOfStreet
 */
class WaypointOptimizationDestinationOptions extends Shape
{
    /**
     * @param array{
     *     AccessHours?: WaypointOptimizationAccessHours|null,
     *     AppointmentTime?: string|null,
     *     Heading?: double|null,
     *     Id?: string|null,
     *     ServiceDuration?: int<0, 4294967295>|null,
     *     SideOfStreet?: WaypointOptimizationSideOfStreetOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
