<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

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
 * @property IsolineVehicleLicensePlate $LicensePlate
 * @property double $MaxSpeed
 * @property int $Occupancy
 * @property int $PayloadCapacity
 * @property int $TireCount
 * @property IsolineTrailerOptions $Trailer
 * @property 'LightTruck'|'StraightTruck'|'Tractor' $TruckType
 * @property string $TunnelRestrictionCode
 * @property int $WeightPerAxle
 * @property WeightPerAxleGroup $WeightPerAxleGroup
 * @property int $Width
 */
class IsolineTruckOptions extends Shape
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
     *     LicensePlate?: IsolineVehicleLicensePlate,
     *     MaxSpeed?: double,
     *     Occupancy?: int,
     *     PayloadCapacity?: int,
     *     TireCount?: int,
     *     Trailer?: IsolineTrailerOptions,
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
