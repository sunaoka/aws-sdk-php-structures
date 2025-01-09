<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\ListExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $executionId
 * @property string $managedDeviceId
 * @property 'QUEUED'|'IN_PROGRESS'|'CANCELED'|'FAILED'|'SUCCEEDED'|'REJECTED'|'TIMED_OUT' $state
 * @property string $taskId
 */
class ExecutionSummary extends Shape
{
    /**
     * @param array{
     *     executionId?: string,
     *     managedDeviceId?: string,
     *     state?: 'QUEUED'|'IN_PROGRESS'|'CANCELED'|'FAILED'|'SUCCEEDED'|'REJECTED'|'TIMED_OUT',
     *     taskId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
