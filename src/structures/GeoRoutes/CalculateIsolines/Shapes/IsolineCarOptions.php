<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Electric'|'InternalCombustion'|'PluginHybrid' $EngineType
 * @property IsolineVehicleLicensePlate $LicensePlate
 * @property double $MaxSpeed
 * @property int $Occupancy
 */
class IsolineCarOptions extends Shape
{
    /**
     * @param array{
     *     EngineType?: 'Electric'|'InternalCombustion'|'PluginHybrid',
     *     LicensePlate?: IsolineVehicleLicensePlate,
     *     MaxSpeed?: double,
     *     Occupancy?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
