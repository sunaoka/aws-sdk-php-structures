<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<2, 255>|null $AxleCount
 * @property int<0, 4294967295>|null $GrossWeight
 * @property list<'Combustible'|'Corrosive'|'Explosive'|'Flammable'|'Gas'|'HarmfulToWater'|'Organic'|'Other'|'Poison'|'PoisonousInhalation'|'Radioactive'>|null $HazardousCargos
 * @property int<0, 5000>|null $Height
 * @property int<0, 4294967295>|null $KpraLength
 * @property int<0, 30000>|null $Length
 * @property RouteMatrixVehicleLicensePlate|null $LicensePlate
 * @property double|null $MaxSpeed
 * @property int<1, max>|null $Occupancy
 * @property int<0, 4294967295>|null $PayloadCapacity
 * @property RouteMatrixTrailerOptions|null $Trailer
 * @property 'LightTruck'|'StraightTruck'|'Tractor'|null $TruckType
 * @property string|null $TunnelRestrictionCode
 * @property int<0, 4294967295>|null $WeightPerAxle
 * @property WeightPerAxleGroup|null $WeightPerAxleGroup
 * @property int<0, 5000>|null $Width
 */
class RouteMatrixTruckOptions extends Shape
{
    /**
     * @param array{
     *     AxleCount?: int<2, 255>|null,
     *     GrossWeight?: int<0, 4294967295>|null,
     *     HazardousCargos?: list<'Combustible'|'Corrosive'|'Explosive'|'Flammable'|'Gas'|'HarmfulToWater'|'Organic'|'Other'|'Poison'|'PoisonousInhalation'|'Radioactive'>|null,
     *     Height?: int<0, 5000>|null,
     *     KpraLength?: int<0, 4294967295>|null,
     *     Length?: int<0, 30000>|null,
     *     LicensePlate?: RouteMatrixVehicleLicensePlate|null,
     *     MaxSpeed?: double|null,
     *     Occupancy?: int<1, max>|null,
     *     PayloadCapacity?: int<0, 4294967295>|null,
     *     Trailer?: RouteMatrixTrailerOptions|null,
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
