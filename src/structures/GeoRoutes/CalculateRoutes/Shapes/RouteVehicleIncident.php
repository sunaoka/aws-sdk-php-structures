<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $EndTime
 * @property 'Critical'|'High'|'Medium'|'Low'|null $Severity
 * @property string|null $StartTime
 * @property 'Accident'|'Congestion'|'Construction'|'DisabledVehicle'|'LaneRestriction'|'MassTransit'|'Other'|'PlannedEvent'|'RoadClosure'|'RoadHazard'|'Weather'|null $Type
 */
class RouteVehicleIncident extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     EndTime?: string|null,
     *     Severity?: 'Critical'|'High'|'Medium'|'Low'|null,
     *     StartTime?: string|null,
     *     Type?: 'Accident'|'Congestion'|'Construction'|'DisabledVehicle'|'LaneRestriction'|'MassTransit'|'Other'|'PlannedEvent'|'RoadClosure'|'RoadHazard'|'Weather'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
