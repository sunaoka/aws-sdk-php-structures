<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $result
 * @property int $decisionTaskCompletedEventId
 */
class WorkflowExecutionCompletedEventAttributes extends Shape
{
    /**
     * @param array{
     *     result?: string,
     *     decisionTaskCompletedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
