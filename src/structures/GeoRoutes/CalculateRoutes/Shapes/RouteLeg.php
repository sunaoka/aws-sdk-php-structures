<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteFerryLegDetails|null $FerryLegDetails
 * @property RouteLegGeometry $Geometry
 * @property string|null $Language
 * @property RoutePedestrianLegDetails|null $PedestrianLegDetails
 * @property 'Car'|'Ferry'|'Pedestrian'|'Scooter'|'Truck'|'CarShuttleTrain'|'AerialTramway'|'Airplane'|'Bus'|'BusRapidTransit'|'CityTrain'|'FunicularRailway'|'HighSpeedTrain'|'IntercityTrain'|'InterregionalTrain'|'LightRail'|'Monorail'|'PrivateBus'|'RegionalTrain'|'Subway' $TravelMode
 * @property 'Ferry'|'Pedestrian'|'Vehicle'|'Rental'|'Taxi'|'Transit' $Type
 * @property RouteVehicleLegDetails|null $VehicleLegDetails
 * @property RouteRentalLegDetails|null $RentalLegDetails
 * @property RouteTaxiLegDetails|null $TaxiLegDetails
 * @property RouteTransitLegDetails|null $TransitLegDetails
 */
class RouteLeg extends Shape
{
    /**
     * @param array{
     *     FerryLegDetails?: RouteFerryLegDetails|null,
     *     Geometry: RouteLegGeometry,
     *     Language?: string|null,
     *     PedestrianLegDetails?: RoutePedestrianLegDetails|null,
     *     TravelMode: 'Car'|'Ferry'|'Pedestrian'|'Scooter'|'Truck'|'CarShuttleTrain'|'AerialTramway'|'Airplane'|'Bus'|'BusRapidTransit'|'CityTrain'|'FunicularRailway'|'HighSpeedTrain'|'IntercityTrain'|'InterregionalTrain'|'LightRail'|'Monorail'|'PrivateBus'|'RegionalTrain'|'Subway',
     *     Type: 'Ferry'|'Pedestrian'|'Vehicle'|'Rental'|'Taxi'|'Transit',
     *     VehicleLegDetails?: RouteVehicleLegDetails|null,
     *     RentalLegDetails?: RouteRentalLegDetails|null,
     *     TaxiLegDetails?: RouteTaxiLegDetails|null,
     *     TransitLegDetails?: RouteTransitLegDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
