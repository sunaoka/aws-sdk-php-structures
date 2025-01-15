<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $result
 * @property int $decisionTaskCompletedEventId
 */
class WorkflowExecutionCompletedEventAttributes extends Shape
{
    /**
     * @param array{
     *     result?: string|null,
     *     decisionTaskCompletedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
