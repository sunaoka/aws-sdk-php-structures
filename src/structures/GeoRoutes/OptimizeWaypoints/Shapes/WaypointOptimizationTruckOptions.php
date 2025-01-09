<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $GrossWeight
 * @property list<'Combustible'|'Corrosive'|'Explosive'|'Flammable'|'Gas'|'HarmfulToWater'|'Organic'|'Other'|'Poison'|'PoisonousInhalation'|'Radioactive'> $HazardousCargos
 * @property int $Height
 * @property int $Length
 * @property WaypointOptimizationTrailerOptions $Trailer
 * @property 'StraightTruck'|'Tractor' $TruckType
 * @property string $TunnelRestrictionCode
 * @property int $WeightPerAxle
 * @property int $Width
 */
class WaypointOptimizationTruckOptions extends Shape
{
    /**
     * @param array{
     *     GrossWeight?: int,
     *     HazardousCargos?: list<'Combustible'|'Corrosive'|'Explosive'|'Flammable'|'Gas'|'HarmfulToWater'|'Organic'|'Other'|'Poison'|'PoisonousInhalation'|'Radioactive'>,
     *     Height?: int,
     *     Length?: int,
     *     Trailer?: WaypointOptimizationTrailerOptions,
     *     TruckType?: 'StraightTruck'|'Tractor',
     *     TunnelRestrictionCode?: string,
     *     WeightPerAxle?: int,
     *     Width?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
