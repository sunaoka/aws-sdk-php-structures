<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295>|null $GrossWeight
 * @property list<'Combustible'|'Corrosive'|'Explosive'|'Flammable'|'Gas'|'HarmfulToWater'|'Organic'|'Other'|'Poison'|'PoisonousInhalation'|'Radioactive'>|null $HazardousCargos
 * @property int<0, 5000>|null $Height
 * @property int<0, 30000>|null $Length
 * @property WaypointOptimizationTrailerOptions|null $Trailer
 * @property 'StraightTruck'|'Tractor'|null $TruckType
 * @property string|null $TunnelRestrictionCode
 * @property int<0, 4294967295>|null $WeightPerAxle
 * @property int<0, 5000>|null $Width
 */
class WaypointOptimizationTruckOptions extends Shape
{
    /**
     * @param array{
     *     GrossWeight?: int<0, 4294967295>|null,
     *     HazardousCargos?: list<'Combustible'|'Corrosive'|'Explosive'|'Flammable'|'Gas'|'HarmfulToWater'|'Organic'|'Other'|'Poison'|'PoisonousInhalation'|'Radioactive'>|null,
     *     Height?: int<0, 5000>|null,
     *     Length?: int<0, 30000>|null,
     *     Trailer?: WaypointOptimizationTrailerOptions|null,
     *     TruckType?: 'StraightTruck'|'Tractor'|null,
     *     TunnelRestrictionCode?: string|null,
     *     WeightPerAxle?: int<0, 4294967295>|null,
     *     Width?: int<0, 5000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
