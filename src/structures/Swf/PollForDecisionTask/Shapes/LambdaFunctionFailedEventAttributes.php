<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $scheduledEventId
 * @property int $startedEventId
 * @property string $reason
 * @property string $details
 */
class LambdaFunctionFailedEventAttributes extends Shape
{
    /**
     * @param array{
     *     scheduledEventId: int,
     *     startedEventId: int,
     *     reason?: string,
     *     details?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
