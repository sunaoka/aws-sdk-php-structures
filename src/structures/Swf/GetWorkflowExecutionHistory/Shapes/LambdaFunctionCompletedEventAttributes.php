<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $scheduledEventId
 * @property int $startedEventId
 * @property string $result
 */
class LambdaFunctionCompletedEventAttributes extends Shape
{
    /**
     * @param array{
     *     scheduledEventId: int,
     *     startedEventId: int,
     *     result?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
