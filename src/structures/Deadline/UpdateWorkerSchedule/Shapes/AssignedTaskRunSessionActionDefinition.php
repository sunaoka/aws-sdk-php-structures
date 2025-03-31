<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateWorkerSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $taskId
 * @property string $stepId
 * @property array<string, TaskParameterValue> $parameters
 */
class AssignedTaskRunSessionActionDefinition extends Shape
{
    /**
     * @param array{
     *     taskId?: string|null,
     *     stepId: string,
     *     parameters: array<string, TaskParameterValue>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
