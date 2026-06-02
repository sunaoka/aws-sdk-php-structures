<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AccuratePolylineUnavailable'|'IntermediateStopsUnavailable'|'NoSchedule'|'Other'|'PotentialViolatedVehicleRestrictionUsage'|'ScheduledTimes'|'SeasonalClosure'|'ViolatedAvoidFerry'|'ViolatedAvoidRailFerry'|'ViolatedExcludedTransitMode'|'ViolatedVehicleRestriction'|'ViolatedAvoidAreas' $Code
 * @property 'High'|'Low'|null $Impact
 */
class RouteTransitNotice extends Shape
{
    /**
     * @param array{
     *     Code: 'AccuratePolylineUnavailable'|'IntermediateStopsUnavailable'|'NoSchedule'|'Other'|'PotentialViolatedVehicleRestrictionUsage'|'ScheduledTimes'|'SeasonalClosure'|'ViolatedAvoidFerry'|'ViolatedAvoidRailFerry'|'ViolatedExcludedTransitMode'|'ViolatedVehicleRestriction'|'ViolatedAvoidAreas',
     *     Impact?: 'High'|'Low'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
