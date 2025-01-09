<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteVehicleArrival $Arrival
 * @property RouteVehicleDeparture $Departure
 * @property list<RouteVehicleIncident> $Incidents
 * @property list<RouteVehicleNotice> $Notices
 * @property list<RoutePassThroughWaypoint> $PassThroughWaypoints
 * @property list<RouteVehicleSpan> $Spans
 * @property RouteVehicleSummary $Summary
 * @property list<RouteToll> $Tolls
 * @property list<RouteTollSystem> $TollSystems
 * @property list<RouteVehicleTravelStep> $TravelSteps
 * @property list<string> $TruckRoadTypes
 * @property list<RouteZone> $Zones
 */
class RouteVehicleLegDetails extends Shape
{
    /**
     * @param array{
     *     Arrival: RouteVehicleArrival,
     *     Departure: RouteVehicleDeparture,
     *     Incidents: list<RouteVehicleIncident>,
     *     Notices: list<RouteVehicleNotice>,
     *     PassThroughWaypoints: list<RoutePassThroughWaypoint>,
     *     Spans: list<RouteVehicleSpan>,
     *     Summary?: RouteVehicleSummary,
     *     Tolls: list<RouteToll>,
     *     TollSystems: list<RouteTollSystem>,
     *     TravelSteps: list<RouteVehicleTravelStep>,
     *     TruckRoadTypes: list<string>,
     *     Zones: list<RouteZone>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
