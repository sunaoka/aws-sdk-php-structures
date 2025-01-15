<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property \Aws\Api\DateTimeResult|null $startTime
 */
class MaintenanceSchedule extends Shape
{
    /**
     * @param array{
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     startTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
