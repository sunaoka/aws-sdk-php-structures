<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteFerryLegDetails $FerryLegDetails
 * @property RouteLegGeometry $Geometry
 * @property string $Language
 * @property RoutePedestrianLegDetails $PedestrianLegDetails
 * @property 'Car'|'Ferry'|'Pedestrian'|'Scooter'|'Truck' $TravelMode
 * @property 'Ferry'|'Pedestrian'|'Vehicle' $Type
 * @property RouteVehicleLegDetails $VehicleLegDetails
 */
class RouteLeg extends Shape
{
    /**
     * @param array{
     *     FerryLegDetails?: RouteFerryLegDetails,
     *     Geometry: RouteLegGeometry,
     *     Language?: string,
     *     PedestrianLegDetails?: RoutePedestrianLegDetails,
     *     TravelMode: 'Car'|'Ferry'|'Pedestrian'|'Scooter'|'Truck',
     *     Type: 'Ferry'|'Pedestrian'|'Vehicle',
     *     VehicleLegDetails?: RouteVehicleLegDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
