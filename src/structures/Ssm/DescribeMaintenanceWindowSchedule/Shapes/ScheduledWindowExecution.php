<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WindowId
 * @property string $Name
 * @property string $ExecutionTime
 */
class ScheduledWindowExecution extends Shape
{
    /**
     * @param array{
     *     WindowId?: string,
     *     Name?: string,
     *     ExecutionTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
