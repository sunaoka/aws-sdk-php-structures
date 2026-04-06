<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSessionAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, TaskParameterValue> $parameters
 * @property string $stepId
 * @property string $taskId
 */
class TaskRunSessionActionDefinition extends Shape
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
