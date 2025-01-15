<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WindowId
 * @property string|null $Name
 * @property string|null $ExecutionTime
 */
class ScheduledWindowExecution extends Shape
{
    /**
     * @param array{
     *     WindowId?: string|null,
     *     Name?: string|null,
     *     ExecutionTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
