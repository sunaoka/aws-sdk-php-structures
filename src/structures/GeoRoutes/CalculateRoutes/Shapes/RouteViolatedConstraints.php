<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AllHazardsRestricted
 * @property RouteNoticeDetailRange $AxleCount
 * @property list<'Combustible'|'Corrosive'|'Explosive'|'Flammable'|'Gas'|'HarmfulToWater'|'Organic'|'Other'|'Poison'|'PoisonousInhalation'|'Radioactive'> $HazardousCargos
 * @property int<0, 4294967295> $MaxHeight
 * @property int<0, 4294967295> $MaxKpraLength
 * @property int<0, 4294967295> $MaxLength
 * @property int<0, 4294967295> $MaxPayloadCapacity
 * @property RouteWeightConstraint $MaxWeight
 * @property int<0, 4294967295> $MaxWeightPerAxle
 * @property WeightPerAxleGroup $MaxWeightPerAxleGroup
 * @property int<0, 4294967295> $MaxWidth
 * @property RouteNoticeDetailRange $Occupancy
 * @property string $RestrictedTimes
 * @property bool $TimeDependent
 * @property RouteNoticeDetailRange $TrailerCount
 * @property bool $TravelMode
 * @property string $TruckRoadType
 * @property 'LightTruck'|'StraightTruck'|'Tractor' $TruckType
 * @property string $TunnelRestrictionCode
 */
class RouteViolatedConstraints extends Shape
{
    /**
     * @param array{
     *     AllHazardsRestricted?: bool,
     *     AxleCount?: RouteNoticeDetailRange,
     *     HazardousCargos: list<'Combustible'|'Corrosive'|'Explosive'|'Flammable'|'Gas'|'HarmfulToWater'|'Organic'|'Other'|'Poison'|'PoisonousInhalation'|'Radioactive'>,
     *     MaxHeight?: int<0, 4294967295>,
     *     MaxKpraLength?: int<0, 4294967295>,
     *     MaxLength?: int<0, 4294967295>,
     *     MaxPayloadCapacity?: int<0, 4294967295>,
     *     MaxWeight?: RouteWeightConstraint,
     *     MaxWeightPerAxle?: int<0, 4294967295>,
     *     MaxWeightPerAxleGroup?: WeightPerAxleGroup,
     *     MaxWidth?: int<0, 4294967295>,
     *     Occupancy?: RouteNoticeDetailRange,
     *     RestrictedTimes?: string,
     *     TimeDependent?: bool,
     *     TrailerCount?: RouteNoticeDetailRange,
     *     TravelMode?: bool,
     *     TruckRoadType?: string,
     *     TruckType?: 'LightTruck'|'StraightTruck'|'Tractor',
     *     TunnelRestrictionCode?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
