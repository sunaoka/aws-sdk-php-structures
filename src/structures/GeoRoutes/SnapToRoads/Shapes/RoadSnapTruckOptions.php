<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\SnapToRoads\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295> $GrossWeight
 * @property list<'Combustible'|'Corrosive'|'Explosive'|'Flammable'|'Gas'|'HarmfulToWater'|'Organic'|'Other'|'Poison'|'PoisonousInhalation'|'Radioactive'> $HazardousCargos
 * @property int<0, 5000> $Height
 * @property int<0, 30000> $Length
 * @property RoadSnapTrailerOptions $Trailer
 * @property string $TunnelRestrictionCode
 * @property int<0, 5000> $Width
 */
class RoadSnapTruckOptions extends Shape
{
    /**
     * @param array{
     *     GrossWeight?: int<0, 4294967295>,
     *     HazardousCargos?: list<'Combustible'|'Corrosive'|'Explosive'|'Flammable'|'Gas'|'HarmfulToWater'|'Organic'|'Other'|'Poison'|'PoisonousInhalation'|'Radioactive'>,
     *     Height?: int<0, 5000>,
     *     Length?: int<0, 30000>,
     *     Trailer?: RoadSnapTrailerOptions,
     *     TunnelRestrictionCode?: string,
     *     Width?: int<0, 5000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
