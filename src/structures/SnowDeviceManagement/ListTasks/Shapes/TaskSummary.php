<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\ListTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PROGRESS'|'CANCELED'|'COMPLETED'|null $state
 * @property array<string, string>|null $tags
 * @property string|null $taskArn
 * @property string $taskId
 */
class TaskSummary extends Shape
{
    /**
     * @param array{
     *     state?: 'IN_PROGRESS'|'CANCELED'|'COMPLETED'|null,
     *     tags?: array<string, string>|null,
     *     taskArn?: string|null,
     *     taskId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
