<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $control
 * @property string $input
 * @property string $startToCloseTimeout
 * @property int $decisionTaskCompletedEventId
 */
class LambdaFunctionScheduledEventAttributes extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     control?: string,
     *     input?: string,
     *     startToCloseTimeout?: string,
     *     decisionTaskCompletedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
