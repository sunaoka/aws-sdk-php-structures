<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RouteTaxiAfterTravelStep> $AfterTravelSteps
 * @property RouteTaxiAgency $Agency
 * @property RouteTaxiArrival $Arrival
 * @property list<RouteAttribution> $Attributions
 * @property list<RouteTaxiBeforeTravelStep> $BeforeTravelSteps
 * @property list<RouteWebLink> $BookingWebLinks
 * @property RouteTaxiDeparture $Departure
 * @property list<RouteTaxiNotice> $Notices
 * @property RouteTaxiSummary|null $Summary
 * @property RouteTaxiTransportModeDetails $Transport
 * @property list<RouteTaxiTravelStep> $TravelSteps
 */
class RouteTaxiLegDetails extends Shape
{
    /**
     * @param array{
     *     AfterTravelSteps: list<RouteTaxiAfterTravelStep>,
     *     Agency: RouteTaxiAgency,
     *     Arrival: RouteTaxiArrival,
     *     Attributions: list<RouteAttribution>,
     *     BeforeTravelSteps: list<RouteTaxiBeforeTravelStep>,
     *     BookingWebLinks: list<RouteWebLink>,
     *     Departure: RouteTaxiDeparture,
     *     Notices: list<RouteTaxiNotice>,
     *     Summary?: RouteTaxiSummary|null,
     *     Transport: RouteTaxiTransportModeDetails,
     *     TravelSteps: list<RouteTaxiTravelStep>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
