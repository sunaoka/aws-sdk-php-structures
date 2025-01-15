<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WaypointOptimizationRestCycles|null $RestCycles
 * @property WaypointOptimizationRestProfile|null $RestProfile
 * @property 'Rest'|'Work'|null $TreatServiceTimeAs
 */
class WaypointOptimizationDriverOptions extends Shape
{
    /**
     * @param array{
     *     RestCycles?: WaypointOptimizationRestCycles|null,
     *     RestProfile?: WaypointOptimizationRestProfile|null,
     *     TreatServiceTimeAs?: 'Rest'|'Work'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
