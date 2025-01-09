<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $EndTime
 * @property 'Critical'|'High'|'Medium'|'Low' $Severity
 * @property string $StartTime
 * @property 'Accident'|'Congestion'|'Construction'|'DisabledVehicle'|'LaneRestriction'|'MassTransit'|'Other'|'PlannedEvent'|'RoadClosure'|'RoadHazard'|'Weather' $Type
 */
class RouteVehicleIncident extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     EndTime?: string,
     *     Severity?: 'Critical'|'High'|'Medium'|'Low',
     *     StartTime?: string,
     *     Type?: 'Accident'|'Congestion'|'Construction'|'DisabledVehicle'|'LaneRestriction'|'MassTransit'|'Other'|'PlannedEvent'|'RoadClosure'|'RoadHazard'|'Weather'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
