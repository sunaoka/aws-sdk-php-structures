<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $reason
 * @property string $details
 * @property int $scheduledEventId
 * @property int $startedEventId
 */
class ActivityTaskFailedEventAttributes extends Shape
{
    /**
     * @param array{
     *     reason?: string,
     *     details?: string,
     *     scheduledEventId: int,
     *     startedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
