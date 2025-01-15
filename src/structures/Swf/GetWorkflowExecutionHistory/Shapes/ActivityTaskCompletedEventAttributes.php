<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $result
 * @property int $scheduledEventId
 * @property int $startedEventId
 */
class ActivityTaskCompletedEventAttributes extends Shape
{
    /**
     * @param array{
     *     result?: string|null,
     *     scheduledEventId: int,
     *     startedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
