<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RouteTransitAfterTravelStep> $AfterTravelSteps
 * @property RouteTransitAgency|null $Agency
 * @property RouteTransitArrival $Arrival
 * @property list<RouteAttribution> $Attributions
 * @property list<RouteTransitBeforeTravelStep> $BeforeTravelSteps
 * @property list<RouteWebLink> $BookingWebLinks
 * @property RouteTransitDeparture $Departure
 * @property list<RouteTransitIncident> $Incidents
 * @property list<RouteTransitIntermediateStop> $IntermediateStops
 * @property list<RouteTransitNextDeparture> $NextDepartures
 * @property list<RouteTransitNotice> $Notices
 * @property list<RoutePassThroughWaypoint> $PassThroughWaypoints
 * @property list<RouteTransitSpan> $Spans
 * @property RouteTransitSummary|null $Summary
 * @property RouteTransitTransportModeDetails $Transport
 * @property list<RouteTransitTravelStep> $TravelSteps
 */
class RouteTransitLegDetails extends Shape
{
    /**
     * @param array{
     *     AfterTravelSteps: list<RouteTransitAfterTravelStep>,
     *     Agency?: RouteTransitAgency|null,
     *     Arrival: RouteTransitArrival,
     *     Attributions: list<RouteAttribution>,
     *     BeforeTravelSteps: list<RouteTransitBeforeTravelStep>,
     *     BookingWebLinks: list<RouteWebLink>,
     *     Departure: RouteTransitDeparture,
     *     Incidents: list<RouteTransitIncident>,
     *     IntermediateStops: list<RouteTransitIntermediateStop>,
     *     NextDepartures: list<RouteTransitNextDeparture>,
     *     Notices: list<RouteTransitNotice>,
     *     PassThroughWaypoints: list<RoutePassThroughWaypoint>,
     *     Spans: list<RouteTransitSpan>,
     *     Summary?: RouteTransitSummary|null,
     *     Transport: RouteTransitTransportModeDetails,
     *     TravelSteps: list<RouteTransitTravelStep>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
