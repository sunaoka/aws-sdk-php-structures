<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $scheduledEventId
 * @property 'ASSUME_ROLE_FAILED' $cause
 * @property string $message
 */
class StartLambdaFunctionFailedEventAttributes extends Shape
{
    /**
     * @param array{
     *     scheduledEventId?: int,
     *     cause?: 'ASSUME_ROLE_FAILED',
     *     message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
