<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Electric'|'InternalCombustion'|'PluginHybrid'|null $EngineType
 * @property IsolineVehicleLicensePlate|null $LicensePlate
 * @property double|null $MaxSpeed
 * @property int<1, max>|null $Occupancy
 */
class IsolineCarOptions extends Shape
{
    /**
     * @param array{
     *     EngineType?: 'Electric'|'InternalCombustion'|'PluginHybrid'|null,
     *     LicensePlate?: IsolineVehicleLicensePlate|null,
     *     MaxSpeed?: double|null,
     *     Occupancy?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
