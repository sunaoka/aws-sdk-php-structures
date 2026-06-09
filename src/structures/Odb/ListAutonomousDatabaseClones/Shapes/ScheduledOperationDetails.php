<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousDatabaseClones\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DayOfWeek $dayOfWeek
 * @property string|null $scheduledStartTime
 * @property string|null $scheduledStopTime
 */
class ScheduledOperationDetails extends Shape
{
    /**
     * @param array{
     *     dayOfWeek: DayOfWeek,
     *     scheduledStartTime?: string|null,
     *     scheduledStopTime?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
