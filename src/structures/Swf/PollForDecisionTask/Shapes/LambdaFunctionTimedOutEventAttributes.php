<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $scheduledEventId
 * @property int $startedEventId
 * @property 'START_TO_CLOSE' $timeoutType
 */
class LambdaFunctionTimedOutEventAttributes extends Shape
{
    /**
     * @param array{
     *     scheduledEventId: int,
     *     startedEventId: int,
     *     timeoutType?: 'START_TO_CLOSE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
