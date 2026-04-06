<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSessionActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stepId
 * @property string $taskId
 */
class TaskRunSessionActionDefinitionSummary extends Shape
{
    /**
     * @param array{
     *     stepId: string,
     *     taskId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
