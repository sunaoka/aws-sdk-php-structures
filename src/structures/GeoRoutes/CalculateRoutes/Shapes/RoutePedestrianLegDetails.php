<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RoutePedestrianArrival $Arrival
 * @property RoutePedestrianDeparture $Departure
 * @property list<RoutePedestrianNotice> $Notices
 * @property list<RoutePassThroughWaypoint> $PassThroughWaypoints
 * @property list<RoutePedestrianSpan> $Spans
 * @property RoutePedestrianSummary|null $Summary
 * @property list<RoutePedestrianTravelStep> $TravelSteps
 */
class RoutePedestrianLegDetails extends Shape
{
    /**
     * @param array{
     *     Arrival: RoutePedestrianArrival,
     *     Departure: RoutePedestrianDeparture,
     *     Notices: list<RoutePedestrianNotice>,
     *     PassThroughWaypoints: list<RoutePassThroughWaypoint>,
     *     Spans: list<RoutePedestrianSpan>,
     *     Summary?: RoutePedestrianSummary|null,
     *     TravelSteps: list<RoutePedestrianTravelStep>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
