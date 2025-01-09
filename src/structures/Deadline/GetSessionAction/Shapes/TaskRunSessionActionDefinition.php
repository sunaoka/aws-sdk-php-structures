<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSessionAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $taskId
 * @property string $stepId
 * @property array<string, TaskParameterValue> $parameters
 */
class TaskRunSessionActionDefinition extends Shape
{
    /**
     * @param array{
     *     taskId: string,
     *     stepId: string,
     *     parameters: array<string, TaskParameterValue>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
