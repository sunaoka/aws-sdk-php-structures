<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $identity
 * @property int $scheduledEventId
 */
class ActivityTaskStartedEventAttributes extends Shape
{
    /**
     * @param array{
     *     identity?: string|null,
     *     scheduledEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
