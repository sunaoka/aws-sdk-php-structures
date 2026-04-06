<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AllHazardsRestricted
 * @property RouteNoticeDetailRange|null $AxleCount
 * @property list<'Combustible'|'Corrosive'|'Explosive'|'Flammable'|'Gas'|'HarmfulToWater'|'Organic'|'Other'|'Poison'|'PoisonousInhalation'|'Radioactive'> $HazardousCargos
 * @property int<0, 4294967295>|null $MaxHeight
 * @property int<0, 4294967295>|null $MaxKpraLength
 * @property int<0, 4294967295>|null $MaxLength
 * @property int<0, 4294967295>|null $MaxPayloadCapacity
 * @property RouteWeightConstraint|null $MaxWeight
 * @property int<0, 4294967295>|null $MaxWeightPerAxle
 * @property WeightPerAxleGroup|null $MaxWeightPerAxleGroup
 * @property int<0, 4294967295>|null $MaxWidth
 * @property RouteNoticeDetailRange|null $Occupancy
 * @property string|null $RestrictedTimes
 * @property bool|null $TimeDependent
 * @property RouteNoticeDetailRange|null $TrailerCount
 * @property bool|null $TravelMode
 * @property string|null $TruckRoadType
 * @property 'LightTruck'|'StraightTruck'|'Tractor'|null $TruckType
 * @property string|null $TunnelRestrictionCode
 */
class RouteViolatedConstraints extends Shape
{
    /**
     * @param array{
     *     AllHazardsRestricted?: bool|null,
     *     AxleCount?: RouteNoticeDetailRange|null,
     *     HazardousCargos: list<'Combustible'|'Corrosive'|'Explosive'|'Flammable'|'Gas'|'HarmfulToWater'|'Organic'|'Other'|'Poison'|'PoisonousInhalation'|'Radioactive'>,
     *     MaxHeight?: int<0, 4294967295>|null,
     *     MaxKpraLength?: int<0, 4294967295>|null,
     *     MaxLength?: int<0, 4294967295>|null,
     *     MaxPayloadCapacity?: int<0, 4294967295>|null,
     *     MaxWeight?: RouteWeightConstraint|null,
     *     MaxWeightPerAxle?: int<0, 4294967295>|null,
     *     MaxWeightPerAxleGroup?: WeightPerAxleGroup|null,
     *     MaxWidth?: int<0, 4294967295>|null,
     *     Occupancy?: RouteNoticeDetailRange|null,
     *     RestrictedTimes?: string|null,
     *     TimeDependent?: bool|null,
     *     TrailerCount?: RouteNoticeDetailRange|null,
     *     TravelMode?: bool|null,
     *     TruckRoadType?: string|null,
     *     TruckType?: 'LightTruck'|'StraightTruck'|'Tractor'|null,
     *     TunnelRestrictionCode?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
