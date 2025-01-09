<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<2, 255> $AxleCount
 * @property int<0, 4294967295> $GrossWeight
 * @property list<'Combustible'|'Corrosive'|'Explosive'|'Flammable'|'Gas'|'HarmfulToWater'|'Organic'|'Other'|'Poison'|'PoisonousInhalation'|'Radioactive'> $HazardousCargos
 * @property int<0, 5000> $Height
 * @property int<0, 4294967295> $KpraLength
 * @property int<0, 30000> $Length
 * @property RouteMatrixVehicleLicensePlate $LicensePlate
 * @property double $MaxSpeed
 * @property int<1, max> $Occupancy
 * @property int<0, 4294967295> $PayloadCapacity
 * @property RouteMatrixTrailerOptions $Trailer
 * @property 'LightTruck'|'StraightTruck'|'Tractor' $TruckType
 * @property string $TunnelRestrictionCode
 * @property int<0, 4294967295> $WeightPerAxle
 * @property WeightPerAxleGroup $WeightPerAxleGroup
 * @property int<0, 5000> $Width
 */
class RouteMatrixTruckOptions extends Shape
{
    /**
     * @param array{
     *     AxleCount?: int<2, 255>,
     *     GrossWeight?: int<0, 4294967295>,
     *     HazardousCargos?: list<'Combustible'|'Corrosive'|'Explosive'|'Flammable'|'Gas'|'HarmfulToWater'|'Organic'|'Other'|'Poison'|'PoisonousInhalation'|'Radioactive'>,
     *     Height?: int<0, 5000>,
     *     KpraLength?: int<0, 4294967295>,
     *     Length?: int<0, 30000>,
     *     LicensePlate?: RouteMatrixVehicleLicensePlate,
     *     MaxSpeed?: double,
     *     Occupancy?: int<1, max>,
     *     PayloadCapacity?: int<0, 4294967295>,
     *     Trailer?: RouteMatrixTrailerOptions,
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
