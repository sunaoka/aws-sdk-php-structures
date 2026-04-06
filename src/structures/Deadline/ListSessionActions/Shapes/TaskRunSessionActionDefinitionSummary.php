<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSessionActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $taskId
 * @property string $stepId
 * @property array<string, TaskParameterValue>|null $parameters
 */
class TaskRunSessionActionDefinitionSummary extends Shape
{
    /**
     * @param array{
     *     taskId?: string|null,
     *     stepId: string,
     *     parameters?: array<string, TaskParameterValue>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
