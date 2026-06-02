<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RouteRentalAfterTravelStep> $AfterTravelSteps
 * @property RouteRentalAgency $Agency
 * @property RouteRentalArrival $Arrival
 * @property list<RouteAttribution> $Attributions
 * @property list<RouteRentalBeforeTravelStep> $BeforeTravelSteps
 * @property list<RouteWebLink> $BookingWebLinks
 * @property RouteRentalDeparture $Departure
 * @property RouteRentalSummary|null $Summary
 * @property RouteRentalTransportModeDetails $Transport
 * @property list<RouteRentalTravelStep> $TravelSteps
 */
class RouteRentalLegDetails extends Shape
{
    /**
     * @param array{
     *     AfterTravelSteps: list<RouteRentalAfterTravelStep>,
     *     Agency: RouteRentalAgency,
     *     Arrival: RouteRentalArrival,
     *     Attributions: list<RouteAttribution>,
     *     BeforeTravelSteps: list<RouteRentalBeforeTravelStep>,
     *     BookingWebLinks: list<RouteWebLink>,
     *     Departure: RouteRentalDeparture,
     *     Summary?: RouteRentalSummary|null,
     *     Transport: RouteRentalTransportModeDetails,
     *     TravelSteps: list<RouteRentalTravelStep>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
