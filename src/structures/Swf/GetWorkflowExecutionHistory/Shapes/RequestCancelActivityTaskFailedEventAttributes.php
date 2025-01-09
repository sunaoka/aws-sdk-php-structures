<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $activityId
 * @property 'ACTIVITY_ID_UNKNOWN'|'OPERATION_NOT_PERMITTED' $cause
 * @property int $decisionTaskCompletedEventId
 */
class RequestCancelActivityTaskFailedEventAttributes extends Shape
{
    /**
     * @param array{
     *     activityId: string,
     *     cause: 'ACTIVITY_ID_UNKNOWN'|'OPERATION_NOT_PERMITTED',
     *     decisionTaskCompletedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
