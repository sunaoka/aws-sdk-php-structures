<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'Wheelchair'>|null $AccessibilityAttributes
 * @property int<0, 6>|null $MaxTransfers
 * @property RouteIntermodalPedestrianOptions|null $Pedestrian
 * @property RouteIntermodalRentalOptions|null $Rental
 * @property RouteIntermodalTaxiOptions|null $Taxi
 * @property RouteIntermodalTransitOptions|null $Transit
 * @property RouteIntermodalVehicleOptions|null $Vehicle
 */
class RouteIntermodalOptions extends Shape
{
    /**
     * @param array{
     *     AccessibilityAttributes?: list<'Wheelchair'>|null,
     *     MaxTransfers?: int<0, 6>|null,
     *     Pedestrian?: RouteIntermodalPedestrianOptions|null,
     *     Rental?: RouteIntermodalRentalOptions|null,
     *     Taxi?: RouteIntermodalTaxiOptions|null,
     *     Transit?: RouteIntermodalTransitOptions|null,
     *     Vehicle?: RouteIntermodalVehicleOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
