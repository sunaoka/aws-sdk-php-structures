<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $scheduledEventId
 * @property int $startedEventId
 * @property string|null $reason
 * @property string|null $details
 */
class LambdaFunctionFailedEventAttributes extends Shape
{
    /**
     * @param array{
     *     scheduledEventId: int,
     *     startedEventId: int,
     *     reason?: string|null,
     *     details?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
