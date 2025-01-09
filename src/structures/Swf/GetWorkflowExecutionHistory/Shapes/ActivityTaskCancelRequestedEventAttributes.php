<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $decisionTaskCompletedEventId
 * @property string $activityId
 */
class ActivityTaskCancelRequestedEventAttributes extends Shape
{
    /**
     * @param array{
     *     decisionTaskCompletedEventId: int,
     *     activityId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
