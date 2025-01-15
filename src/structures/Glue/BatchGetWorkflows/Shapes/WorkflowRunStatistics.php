<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetWorkflows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TotalActions
 * @property int|null $TimeoutActions
 * @property int|null $FailedActions
 * @property int|null $StoppedActions
 * @property int|null $SucceededActions
 * @property int|null $RunningActions
 * @property int|null $ErroredActions
 * @property int|null $WaitingActions
 */
class WorkflowRunStatistics extends Shape
{
    /**
     * @param array{
     *     TotalActions?: int|null,
     *     TimeoutActions?: int|null,
     *     FailedActions?: int|null,
     *     StoppedActions?: int|null,
     *     SucceededActions?: int|null,
     *     RunningActions?: int|null,
     *     ErroredActions?: int|null,
     *     WaitingActions?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
