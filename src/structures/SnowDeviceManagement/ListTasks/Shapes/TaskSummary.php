<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\ListTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PROGRESS'|'CANCELED'|'COMPLETED' $state
 * @property array<string, string> $tags
 * @property string $taskArn
 * @property string $taskId
 */
class TaskSummary extends Shape
{
    /**
     * @param array{
     *     state?: 'IN_PROGRESS'|'CANCELED'|'COMPLETED',
     *     tags?: array<string, string>,
     *     taskArn?: string,
     *     taskId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
