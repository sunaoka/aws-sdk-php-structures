<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AxleCount
 * @property 'Electric'|'InternalCombustion'|'PluginHybrid' $EngineType
 * @property int $GrossWeight
 * @property list<'Combustible'|'Corrosive'|'Explosive'|'Flammable'|'Gas'|'HarmfulToWater'|'Organic'|'Other'|'Poison'|'PoisonousInhalation'|'Radioactive'> $HazardousCargos
 * @property int $Height
 * @property int $HeightAboveFirstAxle
 * @property int $KpraLength
 * @property int $Length
 * @property RouteVehicleLicensePlate $LicensePlate
 * @property double $MaxSpeed
 * @property int $Occupancy
 * @property int $PayloadCapacity
 * @property int $TireCount
 * @property RouteTrailerOptions $Trailer
 * @property 'LightTruck'|'StraightTruck'|'Tractor' $TruckType
 * @property string $TunnelRestrictionCode
 * @property int $WeightPerAxle
 * @property WeightPerAxleGroup $WeightPerAxleGroup
 * @property int $Width
 */
class RouteTruckOptions extends Shape
{
    /**
     * @param array{
     *     AxleCount?: int,
     *     EngineType?: 'Electric'|'InternalCombustion'|'PluginHybrid',
     *     GrossWeight?: int,
     *     HazardousCargos?: list<'Combustible'|'Corrosive'|'Explosive'|'Flammable'|'Gas'|'HarmfulToWater'|'Organic'|'Other'|'Poison'|'PoisonousInhalation'|'Radioactive'>,
     *     Height?: int,
     *     HeightAboveFirstAxle?: int,
     *     KpraLength?: int,
     *     Length?: int,
     *     LicensePlate?: RouteVehicleLicensePlate,
     *     MaxSpeed?: double,
     *     Occupancy?: int,
     *     PayloadCapacity?: int,
     *     TireCount?: int,
     *     Trailer?: RouteTrailerOptions,
     *     TruckType?: 'LightTruck'|'StraightTruck'|'Tractor',
     *     TunnelRestrictionCode?: string,
     *     WeightPerAxle?: int,
     *     WeightPerAxleGroup?: WeightPerAxleGroup,
     *     Width?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
