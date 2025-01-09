<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetWorkflows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TotalActions
 * @property int $TimeoutActions
 * @property int $FailedActions
 * @property int $StoppedActions
 * @property int $SucceededActions
 * @property int $RunningActions
 * @property int $ErroredActions
 * @property int $WaitingActions
 */
class WorkflowRunStatistics extends Shape
{
    /**
     * @param array{
     *     TotalActions?: int,
     *     TimeoutActions?: int,
     *     FailedActions?: int,
     *     StoppedActions?: int,
     *     SucceededActions?: int,
     *     RunningActions?: int,
     *     ErroredActions?: int,
     *     WaitingActions?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
