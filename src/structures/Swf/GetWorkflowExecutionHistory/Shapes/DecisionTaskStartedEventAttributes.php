<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identity
 * @property int $scheduledEventId
 */
class DecisionTaskStartedEventAttributes extends Shape
{
    /**
     * @param array{
     *     identity?: string,
     *     scheduledEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
