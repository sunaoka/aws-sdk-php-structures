<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<2, 255> $AxleCount
 * @property 'Electric'|'InternalCombustion'|'PluginHybrid' $EngineType
 * @property int<0, 4294967295> $GrossWeight
 * @property list<'Combustible'|'Corrosive'|'Explosive'|'Flammable'|'Gas'|'HarmfulToWater'|'Organic'|'Other'|'Poison'|'PoisonousInhalation'|'Radioactive'> $HazardousCargos
 * @property int<0, 5000> $Height
 * @property int<0, 5000> $HeightAboveFirstAxle
 * @property int<0, 4294967295> $KpraLength
 * @property int<0, 30000> $Length
 * @property IsolineVehicleLicensePlate $LicensePlate
 * @property double $MaxSpeed
 * @property int<1, max> $Occupancy
 * @property int<0, 4294967295> $PayloadCapacity
 * @property int<1, 255> $TireCount
 * @property IsolineTrailerOptions $Trailer
 * @property 'LightTruck'|'StraightTruck'|'Tractor' $TruckType
 * @property string $TunnelRestrictionCode
 * @property int<0, 4294967295> $WeightPerAxle
 * @property WeightPerAxleGroup $WeightPerAxleGroup
 * @property int<0, 5000> $Width
 */
class IsolineTruckOptions extends Shape
{
    /**
     * @param array{
     *     AxleCount?: int<2, 255>,
     *     EngineType?: 'Electric'|'InternalCombustion'|'PluginHybrid',
     *     GrossWeight?: int<0, 4294967295>,
     *     HazardousCargos?: list<'Combustible'|'Corrosive'|'Explosive'|'Flammable'|'Gas'|'HarmfulToWater'|'Organic'|'Other'|'Poison'|'PoisonousInhalation'|'Radioactive'>,
     *     Height?: int<0, 5000>,
     *     HeightAboveFirstAxle?: int<0, 5000>,
     *     KpraLength?: int<0, 4294967295>,
     *     Length?: int<0, 30000>,
     *     LicensePlate?: IsolineVehicleLicensePlate,
     *     MaxSpeed?: double,
     *     Occupancy?: int<1, max>,
     *     PayloadCapacity?: int<0, 4294967295>,
     *     TireCount?: int<1, 255>,
     *     Trailer?: IsolineTrailerOptions,
     *     TruckType?: 'LightTruck'|'StraightTruck'|'Tractor',
     *     TunnelRestrictionCode?: string,
     *     WeightPerAxle?: int<0, 4294967295>,
     *     WeightPerAxleGroup?: WeightPerAxleGroup,
     *     Width?: int<0, 5000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
