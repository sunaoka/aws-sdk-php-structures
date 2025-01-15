<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<2, 255>|null $AxleCount
 * @property 'Electric'|'InternalCombustion'|'PluginHybrid'|null $EngineType
 * @property int<0, 4294967295>|null $GrossWeight
 * @property list<'Combustible'|'Corrosive'|'Explosive'|'Flammable'|'Gas'|'HarmfulToWater'|'Organic'|'Other'|'Poison'|'PoisonousInhalation'|'Radioactive'>|null $HazardousCargos
 * @property int<0, 5000>|null $Height
 * @property int<0, 5000>|null $HeightAboveFirstAxle
 * @property int<0, 4294967295>|null $KpraLength
 * @property int<0, 30000>|null $Length
 * @property RouteVehicleLicensePlate|null $LicensePlate
 * @property double|null $MaxSpeed
 * @property int<1, max>|null $Occupancy
 * @property int<0, 4294967295>|null $PayloadCapacity
 * @property int<1, 255>|null $TireCount
 * @property RouteTrailerOptions|null $Trailer
 * @property 'LightTruck'|'StraightTruck'|'Tractor'|null $TruckType
 * @property string|null $TunnelRestrictionCode
 * @property int<0, 4294967295>|null $WeightPerAxle
 * @property WeightPerAxleGroup|null $WeightPerAxleGroup
 * @property int<0, 5000>|null $Width
 */
class RouteTruckOptions extends Shape
{
    /**
     * @param array{
     *     AxleCount?: int<2, 255>|null,
     *     EngineType?: 'Electric'|'InternalCombustion'|'PluginHybrid'|null,
     *     GrossWeight?: int<0, 4294967295>|null,
     *     HazardousCargos?: list<'Combustible'|'Corrosive'|'Explosive'|'Flammable'|'Gas'|'HarmfulToWater'|'Organic'|'Other'|'Poison'|'PoisonousInhalation'|'Radioactive'>|null,
     *     Height?: int<0, 5000>|null,
     *     HeightAboveFirstAxle?: int<0, 5000>|null,
     *     KpraLength?: int<0, 4294967295>|null,
     *     Length?: int<0, 30000>|null,
     *     LicensePlate?: RouteVehicleLicensePlate|null,
     *     MaxSpeed?: double|null,
     *     Occupancy?: int<1, max>|null,
     *     PayloadCapacity?: int<0, 4294967295>|null,
     *     TireCount?: int<1, 255>|null,
     *     Trailer?: RouteTrailerOptions|null,
     *     TruckType?: 'LightTruck'|'StraightTruck'|'Tractor'|null,
     *     TunnelRestrictionCode?: string|null,
     *     WeightPerAxle?: int<0, 4294967295>|null,
     *     WeightPerAxleGroup?: WeightPerAxleGroup|null,
     *     Width?: int<0, 5000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
