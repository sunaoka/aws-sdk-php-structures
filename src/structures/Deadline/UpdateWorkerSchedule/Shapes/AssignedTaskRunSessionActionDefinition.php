<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateWorkerSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, TaskParameterValue> $parameters
 * @property string $stepId
 * @property string $taskId
 */
class AssignedTaskRunSessionActionDefinition extends Shape
{
    /**
     * @param array{
     *     parameters: array<string, TaskParameterValue>,
     *     stepId: string,
     *     taskId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
