<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $details
 * @property int $scheduledEventId
 * @property int $startedEventId
 * @property int $latestCancelRequestedEventId
 */
class ActivityTaskCanceledEventAttributes extends Shape
{
    /**
     * @param array{
     *     details?: string,
     *     scheduledEventId: int,
     *     startedEventId: int,
     *     latestCancelRequestedEventId?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
