<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\ListExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $executionId
 * @property string|null $managedDeviceId
 * @property 'QUEUED'|'IN_PROGRESS'|'CANCELED'|'FAILED'|'SUCCEEDED'|'REJECTED'|'TIMED_OUT'|null $state
 * @property string|null $taskId
 */
class ExecutionSummary extends Shape
{
    /**
     * @param array{
     *     executionId?: string|null,
     *     managedDeviceId?: string|null,
     *     state?: 'QUEUED'|'IN_PROGRESS'|'CANCELED'|'FAILED'|'SUCCEEDED'|'REJECTED'|'TIMED_OUT'|null,
     *     taskId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
