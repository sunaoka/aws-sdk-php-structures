<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AllHazardsRestricted
 * @property RouteNoticeDetailRange $AxleCount
 * @property list<'Combustible'|'Corrosive'|'Explosive'|'Flammable'|'Gas'|'HarmfulToWater'|'Organic'|'Other'|'Poison'|'PoisonousInhalation'|'Radioactive'> $HazardousCargos
 * @property int $MaxHeight
 * @property int $MaxKpraLength
 * @property int $MaxLength
 * @property int $MaxPayloadCapacity
 * @property RouteWeightConstraint $MaxWeight
 * @property int $MaxWeightPerAxle
 * @property WeightPerAxleGroup $MaxWeightPerAxleGroup
 * @property int $MaxWidth
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
     *     MaxHeight?: int,
     *     MaxKpraLength?: int,
     *     MaxLength?: int,
     *     MaxPayloadCapacity?: int,
     *     MaxWeight?: RouteWeightConstraint,
     *     MaxWeightPerAxle?: int,
     *     MaxWeightPerAxleGroup?: WeightPerAxleGroup,
     *     MaxWidth?: int,
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
