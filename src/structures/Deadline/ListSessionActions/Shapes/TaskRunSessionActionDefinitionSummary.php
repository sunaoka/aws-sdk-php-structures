<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSessionActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $taskId
 * @property string $stepId
 */
class TaskRunSessionActionDefinitionSummary extends Shape
{
    /**
     * @param array{
     *     taskId: string,
     *     stepId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
