<?php

namespace Sunaoka\Aws\Structures\Swf\PollForActivityTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workflowId
 * @property string $runId
 */
class WorkflowExecution extends Shape
{
    /**
     * @param array{
     *     workflowId: string,
     *     runId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
