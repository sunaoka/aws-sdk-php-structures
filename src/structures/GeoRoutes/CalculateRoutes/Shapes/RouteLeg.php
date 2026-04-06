<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteFerryLegDetails|null $FerryLegDetails
 * @property RouteLegGeometry $Geometry
 * @property string|null $Language
 * @property RoutePedestrianLegDetails|null $PedestrianLegDetails
 * @property 'Car'|'Ferry'|'Pedestrian'|'Scooter'|'Truck' $TravelMode
 * @property 'Ferry'|'Pedestrian'|'Vehicle' $Type
 * @property RouteVehicleLegDetails|null $VehicleLegDetails
 */
class RouteLeg extends Shape
{
    /**
     * @param array{
     *     FerryLegDetails?: RouteFerryLegDetails|null,
     *     Geometry: RouteLegGeometry,
     *     Language?: string|null,
     *     PedestrianLegDetails?: RoutePedestrianLegDetails|null,
     *     TravelMode: 'Car'|'Ferry'|'Pedestrian'|'Scooter'|'Truck',
     *     Type: 'Ferry'|'Pedestrian'|'Vehicle',
     *     VehicleLegDetails?: RouteVehicleLegDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
