<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RouteFerryAfterTravelStep> $AfterTravelSteps
 * @property RouteFerryArrival $Arrival
 * @property list<RouteFerryBeforeTravelStep> $BeforeTravelSteps
 * @property RouteFerryDeparture $Departure
 * @property list<RouteFerryNotice> $Notices
 * @property list<RoutePassThroughWaypoint> $PassThroughWaypoints
 * @property string $RouteName
 * @property list<RouteFerrySpan> $Spans
 * @property RouteFerrySummary $Summary
 * @property list<RouteFerryTravelStep> $TravelSteps
 */
class RouteFerryLegDetails extends Shape
{
    /**
     * @param array{
     *     AfterTravelSteps: list<RouteFerryAfterTravelStep>,
     *     Arrival: RouteFerryArrival,
     *     BeforeTravelSteps: list<RouteFerryBeforeTravelStep>,
     *     Departure: RouteFerryDeparture,
     *     Notices: list<RouteFerryNotice>,
     *     PassThroughWaypoints: list<RoutePassThroughWaypoint>,
     *     RouteName?: string,
     *     Spans: list<RouteFerrySpan>,
     *     Summary?: RouteFerrySummary,
     *     TravelSteps: list<RouteFerryTravelStep>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
