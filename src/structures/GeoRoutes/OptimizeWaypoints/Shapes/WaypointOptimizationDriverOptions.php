<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WaypointOptimizationRestCycles $RestCycles
 * @property WaypointOptimizationRestProfile $RestProfile
 * @property 'Rest'|'Work' $TreatServiceTimeAs
 */
class WaypointOptimizationDriverOptions extends Shape
{
    /**
     * @param array{
     *     RestCycles?: WaypointOptimizationRestCycles,
     *     RestProfile?: WaypointOptimizationRestProfile,
     *     TreatServiceTimeAs?: 'Rest'|'Work'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
