<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Electric'|'InternalCombustion'|'PluginHybrid'|null $EngineType
 * @property RouteVehicleLicensePlate|null $LicensePlate
 * @property double|null $MaxSpeed
 * @property int<1, max>|null $Occupancy
 */
class RouteScooterOptions extends Shape
{
    /**
     * @param array{
     *     EngineType?: 'Electric'|'InternalCombustion'|'PluginHybrid'|null,
     *     LicensePlate?: RouteVehicleLicensePlate|null,
     *     MaxSpeed?: double|null,
     *     Occupancy?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
