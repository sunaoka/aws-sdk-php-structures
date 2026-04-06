<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Start
 * @property \Aws\Api\DateTimeResult $End
 * @property \Aws\Api\DateTimeResult $ScheduledTime
 */
class WindowMaintenanceSchedule extends Shape
{
    /**
     * @param array{
     *     Start: \Aws\Api\DateTimeResult,
     *     End: \Aws\Api\DateTimeResult,
     *     ScheduledTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
