<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Monday'|'Tuesday'|'Wednesday'|'Thursday'|'Friday'|'Saturday'|'Sunday' $DayOfWeek
 * @property string $TimeOfDay
 */
class WaypointOptimizationAccessHoursEntry extends Shape
{
    /**
     * @param array{
     *     DayOfWeek: 'Monday'|'Tuesday'|'Wednesday'|'Thursday'|'Friday'|'Saturday'|'Sunday',
     *     TimeOfDay: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
