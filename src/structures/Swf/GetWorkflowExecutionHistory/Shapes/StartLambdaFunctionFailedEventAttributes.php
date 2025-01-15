<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $scheduledEventId
 * @property 'ASSUME_ROLE_FAILED'|null $cause
 * @property string|null $message
 */
class StartLambdaFunctionFailedEventAttributes extends Shape
{
    /**
     * @param array{
     *     scheduledEventId?: int|null,
     *     cause?: 'ASSUME_ROLE_FAILED'|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
