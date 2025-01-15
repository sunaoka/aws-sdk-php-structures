<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $reason
 * @property string|null $details
 * @property int $scheduledEventId
 * @property int $startedEventId
 */
class ActivityTaskFailedEventAttributes extends Shape
{
    /**
     * @param array{
     *     reason?: string|null,
     *     details?: string|null,
     *     scheduledEventId: int,
     *     startedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
