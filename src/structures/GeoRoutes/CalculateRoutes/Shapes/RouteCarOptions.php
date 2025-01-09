<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Electric'|'InternalCombustion'|'PluginHybrid' $EngineType
 * @property RouteVehicleLicensePlate $LicensePlate
 * @property double $MaxSpeed
 * @property int $Occupancy
 */
class RouteCarOptions extends Shape
{
    /**
     * @param array{
     *     EngineType?: 'Electric'|'InternalCombustion'|'PluginHybrid',
     *     LicensePlate?: RouteVehicleLicensePlate,
     *     MaxSpeed?: double,
     *     Occupancy?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
