<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $scheduledEventId
 */
class LambdaFunctionStartedEventAttributes extends Shape
{
    /**
     * @param array{scheduledEventId: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
