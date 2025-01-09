<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AxleCount
 * @property int $GrossWeight
 * @property list<'Combustible'|'Corrosive'|'Explosive'|'Flammable'|'Gas'|'HarmfulToWater'|'Organic'|'Other'|'Poison'|'PoisonousInhalation'|'Radioactive'> $HazardousCargos
 * @property int $Height
 * @property int $KpraLength
 * @property int $Length
 * @property RouteMatrixVehicleLicensePlate $LicensePlate
 * @property double $MaxSpeed
 * @property int $Occupancy
 * @property int $PayloadCapacity
 * @property RouteMatrixTrailerOptions $Trailer
 * @property 'LightTruck'|'StraightTruck'|'Tractor' $TruckType
 * @property string $TunnelRestrictionCode
 * @property int $WeightPerAxle
 * @property WeightPerAxleGroup $WeightPerAxleGroup
 * @property int $Width
 */
class RouteMatrixTruckOptions extends Shape
{
    /**
     * @param array{
     *     AxleCount?: int,
     *     GrossWeight?: int,
     *     HazardousCargos?: list<'Combustible'|'Corrosive'|'Explosive'|'Flammable'|'Gas'|'HarmfulToWater'|'Organic'|'Other'|'Poison'|'PoisonousInhalation'|'Radioactive'>,
     *     Height?: int,
     *     KpraLength?: int,
     *     Length?: int,
     *     LicensePlate?: RouteMatrixVehicleLicensePlate,
     *     MaxSpeed?: double,
     *     Occupancy?: int,
     *     PayloadCapacity?: int,
     *     Trailer?: RouteMatrixTrailerOptions,
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
